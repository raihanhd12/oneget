<?php

namespace App\Console\Commands;

use App\Models\Tiktok;
use GuzzleHttp\Client;
use App\Models\TiktokPost;
use Illuminate\Console\Command;
use App\Models\HasilAnalisisPostTiktok;

class SaveDataAnalisisPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:save-data-analisis-post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save all data count likes, followers, comments post';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // "followers", "posts", "likes", "shares", "comments"
        $tiktokDatas = $this->getDataTiktok(); // followers, following, likes

        foreach ($tiktokDatas as $tiktokData) {
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
