<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Facebook;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class FacebookController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')
                ->scopes(['email'])
                ->with(['auth_type' => 'reauthenticate'])
                ->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        
        //dd($user);
        
        // Periksa apakah pengguna sudah login
        if (Auth::check()) {
            // Lakukan otentikasi dengan akun Facebook tambahan
            // Hubungkan akun Facebook tambahan ke pengguna saat ini
            Facebook::firstOrCreate([
                'facebook_id' => $user->getId(),
                'user_id' => Auth::id(),
                'name' => $user->getName(),
                'access_token' => $user->token,
            ]);

            return redirect()->route('user')->with('success', 'Akun Facebook berhasil ditambahkan.');
        } else {
            return redirect()->route('user')->with('error', 'Akun facebook gagal ditambahkan');
        }
    }
}
