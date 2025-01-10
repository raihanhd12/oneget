<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tabs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function TabDetails()
    {
        return $this->hasOne(TabDetails::class);
    }
}
