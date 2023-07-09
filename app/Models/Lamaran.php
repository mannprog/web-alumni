<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lamaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lowongan()
    {
        return $this->belongsTo(Loker::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
