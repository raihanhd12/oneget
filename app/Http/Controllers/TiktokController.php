<?php

namespace App\Http\Controllers;

use App\Models\Tiktok;
use GuzzleHttp\Client;
use Nette\Utils\Random;
use App\Models\TiktokPost;
use Illuminate\Http\Request;
use App\Models\HasilAnalisisTiktok;
use Illuminate\Support\Facades\Auth;
use App\Models\HasilAnalisisPostTiktok;

class TiktokController extends Controller
{
    public function tiktokRedirect()
    {
        $appId = config('services.tiktok.client_id');
        $redirectUri = urlencode(config('services.tiktok.redirect'));
        $csrfState = Random::generate(36);
        return redirect()->to("https://www.tiktok.com/v2/auth/authorize/?client_key={$appId}&scope=user.info.basic&response_type=code&redirect_uri={$redirectUri}&state={$csrfState}");
    }

    public function tiktokCallback(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Tiktok.');

        $appId = config('services.tiktok.client_id');
        $secret = config('services.tiktok.client_secret');
        $redirectUri = config('services.tiktok.redirect');

        $client = new Client();

        // Get access token
        $getToken = $client->request('POST', 'https://open.tiktokapis.com/v2/oauth/token/', [
            'form_params' => [
                'client_key' => $appId,
                'client_secret' => $secret,
                'code' => $code,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $redirectUri,
            ]
        ]);

        if ($getToken->getStatusCode() != 200) {
            return redirect()->route('home')->with('error', 'Unauthorized login to Tiktok.');
        }

        $responseToken = json_decode($getToken->getBody()->getContents());

        $authorization = $responseToken->token_type . ' ' . $responseToken->access_token;
        $responseUser = $client->get('https://open.tiktokapis.com/v2/user/info/?fields=open_id,union_id,avatar_url,display_name,bio_description,follower_count,following_count,likes_count,is_verified', [
            'headers' => ['Authorization' => $authorization]
        ]);

        $userInfo = json_decode($responseUser->getBody());

        $responseVideo = $client->request('POST', 'https://open.tiktokapis.com/v2/video/list/?fields=cover_image_url,id,title,comment_count,view_count,share_count,embed_link,id', [
            'headers' => ['Authorization' => $authorization]
        ]);

        $videoInfo = json_decode($responseVideo->getBody()->getContents());

        //$getComments = $client->request('POST', 'https://open.tiktokapis.com/v2/video/comment/list/?fields=id,video_id,text,like_count,reply_count,parent_comment_id,create_time', [
        //    'headers' => ['Authorization' => $authorization],
        //    'body' => ['video_id' => $videoInfo->data->videos[0]->id],
        //]);

        //$videoComments = json_decode($getComments->getBody());

        $tiktok = Tiktok::create([
           "user_id" => Auth::id(),
           "tiktok_id" => $userInfo->data->user->open_id,
           "username" => $userInfo->data->user->display_name,
           "access_token" => $authorization,
           "token_type" => $responseToken->token_type,
           "refresh_token" => $responseToken->refresh_token
        ]);

        HasilAnalisisTiktok::create([
            'followers' => $userInfo->data->user->follower_count,
            'likes' => $videoInfo->data->videos->sum('like_count'),
            'posts' => count($videoInfo->data->videos),
            'share' => $videoInfo->data->videos->sum('share_count'),
            'comments' => $videoInfo->data->videos->sum('comment_count'),
        ]);

        foreach ($videoInfo->data->videos as $video) {
            $post = TiktokPost::create([
                "tiktok_id" => $tiktok->id,
                "tiktok_post_id" => $video->id,
                "tiktok_post_url" => $video->embed_link,
                "tiktok_post_caption" => $video->title,
                "tiktok_post_thumbnail" => $video->cover_image_url
            ]);

            HasilAnalisisPostTiktok::create([
                "tiktok_post_id" => $post->id,
                "tiktok_post_like_count" => $video->like_count,
                "tiktok_post_share_count" => $video->share_count,
                "tiktok_post_comment_count" => $video->comment_count,
                "tiktok_post_play_count" => $video->view_count,
            ]);
        }

        return redirect()->route('user')->with('success', 'Berhasil Signin ke Akun Tiktok.');

    }
}
