<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalyticBrief extends Model
{
    use HasFactory;

    protected $fillable = [
        'hasil_laporan_id',
        'status',
        'feedback'
    ];

    public function hasilLaporan()
    {

        return $this->hasOne(HasilLaporan::class, 'id', 'hasil_laporan_id');
    }
}
