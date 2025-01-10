<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class HasilLaporan extends Model
{
    use HasFactory;

    protected $table = 'hasil_laporan';
    protected $fillable = [
        'user_id',
        'socialmedia_type', // tambahkan ini ke dalam daftar fillable
        'socialmedia_id',
        "judul",
        "format",
        "send_email",
        "email",
        "periode",
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function analyticBrief()
    {
        return $this->belongsTo(AnalyticBrief::class);
    }
}
