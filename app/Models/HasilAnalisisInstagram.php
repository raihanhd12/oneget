<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisisInstagram extends Model
{
    use HasFactory;

    protected $fillable = [
        "followers",
        "posts",
        "likes",
        "shares",
        "comments"
    ];

    public function instagram()
    {
        return $this->belongsTo(Instagram::class);
    }
}
