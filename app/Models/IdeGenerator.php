<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeGenerator extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "keyword",
        "response"
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
