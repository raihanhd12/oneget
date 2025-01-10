<?php

namespace App\Http\Controllers;

use App\Models\Tab;
use App\Models\Tabs;
use App\Exports\UsersExport;
use App\Models\User;
use App\Models\Tiktok;
use App\Models\Facebook;
use App\Models\Instagram;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    function dashboardPage()
    {
        return view(
            'accesspoint.user.dashboard_page',
            [
                'facebook' => Facebook::where('user_id', Auth::id())->get(),
                'instagram' => Instagram::where('user_id', Auth::id())->get(),
                'tiktok' => Tiktok::where('user_id', Auth::id())->get()
            ]
        );
    }
    function socialProfilesPage(Request $request)
    {
        $user = User::find(Auth::id());

        // Mengambil dua huruf pertama dari firstname dan lastname
        $firstInitial = strtoupper(substr($user->firstName, 0, 1));
        $lastInitial = strtoupper(substr($user->lastName, 0, 1));

        $query = $request->input('query');

        // Perform the search query on your Facebook profiles data.
        $facebookProfiles = Facebook::where('username', 'like', '%' . $query . '%')
            ->where('user_id', Auth::id())
            ->get();

        // Perform the search query on your Instagram profiles data.
        $instagramProfiles = Instagram::where('username', 'like', '%' . $query . '%')
            ->where('user_id', Auth::id())
            ->get();

        // Perform the search query on your TikTok profiles data.
        $tiktokProfiles = Tiktok::where('username', 'like', '%' . $query . '%')
            ->where('user_id', Auth::id())
            ->get();

        return view('accesspoint.user.social_profiles_page', compact('user', 'firstInitial', 'lastInitial'), [
            'facebook' => $facebookProfiles,
            'instagram' => $instagramProfiles,
            'tiktok' => $tiktokProfiles
        ])->with('query', $query); // Pass the search query back to the view
    }

    function socialProfilesPost(Request $request)
    {
        $user = User::find(Auth::id());

        if ($request->isMethod('post')) {
            // Validate the input data for basic profile information
            $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
            ]);

            // Update user data for basic profile information
            $user->firstName = $request->input('firstName');
            $user->lastName = $request->input('lastName');
            $user->email = $request->input('email');

            // Check if the user wants to change the password
            if ($request->filled('newPassword')) {
                // Validate the input data for password change
                $request->validate([
                    'oldPassword' => 'required|string',
                    // Old password is required
                    'newPassword' => 'required|string|min:6',
                    // New password is required
                    'confirmPassword' => 'required|string|same:newPassword',
                    // Confirm password must match new password
                ]);

                // Check if the old password matches the current password
                if (!Hash::check($request->input('oldPassword'), $user->password)) {
                    return redirect()->route('socialProfiles')->withErrors('Incorrect old password');
                }

                // Update the password
                $user->password = bcrypt($request->input('newPassword'));
            }

            $user->save();

            // Redirect or show a success message
            return redirect()->route('socialProfiles')->with('success', 'Profile updated successfully');
        }

        return view('accesspoint.user.social_profiles_page', compact('user'));
    }

    public function analisisPage()
    {
        return view(
            'accesspoint.user.partials.tab_home',
            [
                'facebook' => Facebook::where('user_id', Auth::id())->get(),
                'instagram' => Instagram::where('user_id', Auth::id())->get(),
                'tiktok' => Tiktok::where('user_id', Auth::id())->get(),
                'tabs' => Tabs::where('user_id', Auth::id())->get(),
            ]
        );
    }
}
