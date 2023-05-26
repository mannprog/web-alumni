<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jenis_perusahaan',
        'alamat_perusahaan',
        'no_perusahaan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
