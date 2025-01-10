<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'tabs_id',
        'socialmedia'
    ];

    public function tabs()
    {
        return $this->belongsTo(Tabs::class);
    }

    public function TabDetailsable()
    {
        return $this->morphTo();
    }
}
