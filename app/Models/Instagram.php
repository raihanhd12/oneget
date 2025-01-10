<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instagram extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'instagram_id',
        'username',
        'access_token'
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function TabDetails(): MorphOne
    {
        return $this->morphOne(TabDetails::class, 'TabDetailsable');
    }
    public function hasilAnalisis()
    {
        return $this->hasMany(HasilAnalisisInstagram::class);
    }
}
