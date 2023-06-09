<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\UserKontak;
use App\Models\PetugasDetail;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function userKontak()
    {
        return $this->hasOne(UserKontak::class);
    }

    public function petugasDetail()
    {
        return $this->hasOne(PetugasDetail::class);
    }

    public function alumniDetail()
    {
        return $this->hasOne(AlumniDetail::class);
    }

    public function alumniKeluarga()
    {
        return $this->hasOne(AlumniKeluarga::class);
    }

    public function alumniAkademik()
    {
        return $this->hasOne(AlumniAkademik::class);
    }

    public function perusahaanDetail()
    {
        return $this->hasOne(PerusahaanDetail::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function loker()
    {
        return $this->hasMany(Loker::class);
    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class);
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'username'
    //         ]
    //     ];
    // }
}