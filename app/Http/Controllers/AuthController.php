<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    function index()
    {
        return view('auth/login');
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ], [
            'email.required' => 'Email must be filled in',
            'password.required' => 'Password must be filled in',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {

            if (Auth::user()->email_verified_at != null) {
                if (Auth::user()->hasRole('admin')) {
                    return redirect()->route('admin.index')->with('success', 'Admin logged in');
                } else if (Auth::user()->hasRole('user')) {
                    return redirect()->route('user')->with('success', 'Successfully logged in');
                }
            } else {
                Auth::logout();
                return redirect()->route('auth')->withErrors('Your account is not active. Please Verify first');
            }
        } else {
            return redirect()->route('auth')->withErrors('Email or Password incorrect');
        }
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->stateless()->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();

        // Jika tidak ada user, maka buat user baru
        $str = Str::random(100);
        if (!$userFromDatabase) {
            $data = [
                'google_id' => $userFromGoogle->getId(),
                'firstName' => $userFromGoogle->getName(),
                // 'lastName' =>$userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                //'password' => encrypt('123456dummy'),
                'verify_key' => $str
            ];

            $newUser = User::firstOrCreate(['email' => $data['email']], $data);
            $newUser->assignRole('user');

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect()->route('user')->with('success', 'Successfully logged in');
        }

        // Jika ada user langsung login saja
        auth('web')->login($userFromDatabase);
        session()->regenerate();

        return redirect()->route('user')->with('success', 'Successfully logged in');
    }

    function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    function create()
    {
        return view('auth/register');
    }

    function viewForget()
    {
        return view('auth/forget_password');
    }
    function postForget(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users",
        ]);

        $token = Str::random(100) . $request->email;

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $user = User::where('email', $request->email)->first();

        Mail::send("mail/forget", ['token' => $token, 'user' => $user], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        // Menyimpan email ke dalam variabel flash data
        Session::flash('reset_email', $request->email);

        return redirect()->to(route('emailSent'));
    }

    function viewEmailSent()
    {
        // Mengambil email dari variabel flash data
        $resetEmail = Session::get('reset_email');

        // Memisahkan nama pengguna dan domain
        list($username, $domain) = explode('@', $resetEmail);

        // Menghitung panjang nama pengguna
        $usernameLength = strlen($username);

        // Mengambil karakter pertama dan terakhir
        $firstChar = substr($username, 0, 1);
        $lastChar = substr($username, -1);

        // Menggantikan karakter di antara dengan '*'
        $maskedUsername = $firstChar . str_repeat('*', $usernameLength - 2) . $lastChar;

        // Menggabungkan kembali nama pengguna dan domain
        $maskedEmail = $maskedUsername . '@' . $domain;

        return view('auth/email_sent', [
            'resetEmail' => $maskedEmail,
        ]);
    }

    function resetPassword($token, Request $request)
    {
        $url = $request->fullUrl();

        // Mencari posisi "reset-password" dalam URL
        $position = strpos($url, "reset-password");

        if ($position !== false) {
            // Mengambil bagian URL setelah "reset-password"
            $url = substr($url, $position);

            // Menghapus 115 karakter dari depan URL setelah "reset-password"
            $url = substr($url, 115);
        } else {
            // Jika "reset-password" tidak ditemukan, atur URL ke "reset-password"
            $url = "reset-password";
        }

        return view('auth/confirm_password', compact('token'), [
            'emailReset' => $url
        ]);
    }

    function resetPasswordPost(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required",
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                "email" => $request->email,
                "token" => $request->token
            ])->first();

        if (!$updatePassword) {
            return redirect()->to(route('reset'))->with("error", "Invalid ");
        }

        User::where("email", $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table("password_resets")->where(["token" => $request->remember_token])->delete();

        return redirect()->to(route("auth"))->with("success", "Password Reset Success");
    }

    function register(Request $request)
    {
        $str = Str::random(100);
        $request->validate([
            'firstName' => 'required|min:2',
            // 'lastName' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            // 'password_confirmation' => 'required',

        ], [
            'firstName.required' => 'First Name is required',
            'firstName.min' => 'Firstname must be at least 2 characters',
            // 'lastName.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email has been registered',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters',
            // 'password_confirmation.required' => 'The password field confirmation does not match'

        ]);

        $inforegister = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => $request->password,
            'verify_key' => $str
        ];

        $user = User::create($inforegister);
        $user->assignRole('user');

        $details = [
            'firstName' => $inforegister['firstName'],
            'lastName' => $inforegister['lastName'],
            'email' => $inforegister['email'],
            'role' => 'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'Multi - Social Media Channel Integration',
            'url' => 'http://' . request()->getHttpHost() . "/" . "verify/" . $inforegister['verify_key'],
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));

        return redirect()->route('auth')->with('success', 'Verification link has been sent to your email, check your email to verify');
    }

    function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

            return redirect()->route('auth')->with('success', 'Successful verification. your account is already active.');
        } else {
            return redirect()->route('auth')->withErrors('Invalid keys. make sure you have registered')->withInput();
        }
    }
}