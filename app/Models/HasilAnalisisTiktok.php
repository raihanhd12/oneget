<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisisTiktok extends Model
{
    use HasFactory;

    protected $fillable = [
        "followers",
        "posts",
        "likes",
        "shares",
        "comments"
    ];

    public function tiktok()
    {
        return $this->belongsTo(Tiktok::class);
    }
}
