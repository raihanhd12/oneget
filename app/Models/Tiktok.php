<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiktok extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tiktok_id',
        'username',
        'access_token',
        'refresh_token',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function TabDetails(): MorphOne
    {
        return $this->morphOne(TabDetails::class, 'TabDetailssable');
    }

    public function hasilAnalisis()
    {
        return $this->hasMany(HasilAnalisisTiktok::class);
    }

    public function feedbackTiktok()
    {
        return $this->hasMany(FeedbackTiktok::class);
    }

    public function tiktokPost()
    {
        return $this->hasMany(TiktokPost::class);
    }

    public function hasilAnalisisPost()
    {
        return $this->hasMany(HasilAnalisisPostTiktok::class);
    }
}
