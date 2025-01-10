<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstagramController extends Controller
{
    public function instaRedirect()
    {
        $appId = config('services.instagram.client_id');
        $redirectUri = urlencode(config('services.instagram.redirect'));
        return redirect()->to("https://api.instagram.com/oauth/authorize?client_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
    }

    public function instaCallback(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $appId = config('services.instagram.client_id');
        $secret = config('services.instagram.client_secret');
        $redirectUri = config('services.instagram.redirect');

        $client = new Client();

        // Get access token
        $response = $client->request('POST', 'https://api.instagram.com/oauth/access_token', [
            'form_params' => [
                'client_id' => $appId,
                'client_secret' => $secret,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $redirectUri,
                'code' => $code,
            ]
        ]);

        if ($response->getStatusCode() != 200) {
            return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
        }

        $content = $response->getBody()->getContents();
        $content = json_decode($content);

        $accessToken = $content->access_token;
        $userId = $content->user_id;

        // Get user info
        $response = $client->request('GET', "https://graph.instagram.com/me?fields=id,username,account_type,media_count&access_token={$accessToken}");
        $content = $response->getBody()->getContents();
        $user = json_decode($content);

        if (Auth::check()) {
            Instagram::firstOrCreate([
                'instagram_id' => $user->id,
                'user_id' => Auth::id(),
                'name' => $user->username,
                'access_token' => $accessToken,
            ]);

            return redirect()->route('user')->with('success', 'Akun Instagram berhasil ditambahkan.');
        } else {
            return redirect()->route('user')->with('error', 'Akun Instagram gagal ditambahkan');
        }
    }
}
