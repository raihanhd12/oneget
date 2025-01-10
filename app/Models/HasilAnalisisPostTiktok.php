<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisisPostTiktok extends Model
{
    use HasFactory;

    protected $fillable = [
        "tiktok_post_id",
        "tiktok_post_like_count",
        "tiktok_post_share_count",
        "tiktok_post_comment_count",
        "tiktok_post_play_count"
    ];

    public function tiktokPost()
    {
        return $this->belongsTo(TiktokPost::class);
    }
}
