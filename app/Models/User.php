<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

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

    public function company_detail() 
    {
        return $this->hasOne(CompanyDetail::class);
    }

    public function civitas_detail() 
    {
        return $this->hasOne(CivitasDetail::class);
    }

    public function visitor_detail() 
    {
        return $this->hasOne(VisitorDetail::class);
    }

    public function alumni_detail() 
    {
        return $this->hasOne(AlumniDetail::class);
    }

    public function alumni_family() 
    {
        return $this->hasOne(AlumniFamily::class);
    }

    public function alumni_academic() 
    {
        return $this->hasOne(AlumniAcademic::class);
    }
}
