<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nis',
        'nisn',
        'nik',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'no_handphone',
        'alamat',
        'status',
        'keahlian',
        'organisasi',
        'pengalaman_kerja',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
