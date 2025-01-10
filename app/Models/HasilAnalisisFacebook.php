<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnalisisFacebook extends Model
{
    use HasFactory;

    protected $fillable = [
        "followers",
        "posts",
        "likes",
        "shares",
        "comments"
    ];

    public function facebook()
    {
        return $this->belongsTo(Facebook::class);
    }
}
