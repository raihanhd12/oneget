<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackTiktok extends Model
{
    use HasFactory;

    protected $fillable = [
        "tiktok_id",
        "feedback"
    ];

    public function tiktok()
    {
        return $this->belongsTo(Tiktok::class);
    }

}
