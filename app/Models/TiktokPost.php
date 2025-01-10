<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiktokPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'tiktok_id',
        'tiktok_post_id',
        'tiktok_post_url',
        'tiktok_post_caption',
        "tiktok_post_thumbnail"
    ];

    public function tiktok()
    {
        return $this->belongsTo(Tiktok::class);
    }

    public function hasilAnalisisPostTiktok()
    {
        return $this->hasMany(HasilAnalisisPostTiktok::class);
    }
}
