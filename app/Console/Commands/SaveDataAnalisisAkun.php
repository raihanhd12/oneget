<?php

namespace App\Console\Commands;

use App\Models\HasilAnalisisPostTiktok;
use App\Models\HasilAnalisisTiktok;
use App\Models\Tiktok;
use App\Models\TiktokPost;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class SaveDataAnalisisAkun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:save-data-analisis-akun';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save all data count likes, followers, comments account';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // "followers", "posts", "likes", "shares", "comments"
        $tiktokDatas = $this->getDataTiktok(); // followers, following, likes

        foreach ($tiktokDatas as $tiktokData) {
            $findId = HasilAnalisisTiktok::find($tiktokData[0])->get();

            HasilAnalisisTiktok::where('id', $findId)->updated([
                'followers' => $tiktokData[1]->follower_count,
                'likes' => $tiktokData[1]->sum('like_count'),
                'posts' => count($tiktokData[2]),
                'share' => $tiktokData[2]->sum('share_count'),
                'comments' => $tiktokData[2]->sum('comment_count'),
            ]);

            foreach ($tiktokData[2] as $videoData) {
                $tiktokPost = TiktokPost::where('tiktok_post_id', $videoData->id)->get();
                HasilAnalisisPostTiktok::where('id', $tiktokPost->id)->updated([
                    'tiktok_post_like_count' => $videoData->like_count,
                    'tiktok_post_share_count' => $videoData->share_count,
                    'tiktok_post_comment_count' => $videoData->comment_count,
                ]);
            }
        }
    }

    public function getDataTiktok()
    {
        $tiktoks = Tiktok::all();

        $client = new Client();

        $datas = [];

        foreach ($tiktoks as $tiktok) {
            $accessToken = $tiktok->access_token;

            $responseUser = $client->get('https://open.tiktokapis.com/v2/user/info/?fields=follower_count,following_count,likes_count', [
                'headers' => ['Authorization' => $accessToken],
            ]);

            $responseVideo = $client->get('https://open.tiktokapis.com/v2/video/list/?fields=cover_image_url,id,title,comment_count,view_count,like_count,share_count,create_time,embed_link,embed_html', [
                'headers' => ['Authorization' => $accessToken],
            ]);

            array_push($datas, [$tiktok->id, json_decode($responseUser->getBody())->data->user, json_decode($responseVideo->getBody())->data->videos]);
        }

        // $accessToken = "Bearer act.SD8DWWNJHYLgK1QQaA7EnBKo1CVMpj6jycWs0F6tsd9A8zqjl64RheHeuYK5!5235.va";

        // $responseUser = $client->get("https://open.tiktokapis.com/v2/user/info/?fields=follower_count,following_count,likes_count", [
        //     "headers" => ["Authorization" => $accessToken]
        // ]);

        // $responseVideo = $client->get("https://open.tiktokapis.com/v2/video/list/?fields=cover_image_url,id,title,comment_count,view_count,like_count,share_count,create_time,embed_link,embed_html", [
        //     "headers" => ["Authorization" => $accessToken]
        // ]);

        return response()->json([
            'datas' => $datas,
        ]);
    }
}
