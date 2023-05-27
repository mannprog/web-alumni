<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniAcademic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jurusan',
        'rombel',
        'tahun_masuk',
        'tahun_lulus',
        'rata_ijazah',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
