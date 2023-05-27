<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniFamily extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ayah',
        'pekerjaan_ayah',
        'ibu',
        'pekerjaan_ibu',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
