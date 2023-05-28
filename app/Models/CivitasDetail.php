<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivitasDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nip',
        'nuptk',
        'nik',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'no_handphone',
        'status',
        'alamat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
