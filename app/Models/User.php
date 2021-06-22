<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referred_by',
        'username',
        'active',
        'packet_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'referred_by'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profil(){
        return $this->hasOne(Profil::class);
    }

    public function packet(){
        return $this->belongsTo(Packet::class);
    }


    public function referrer()
    {
        return $this->belongsTo(Self::class, 'referred_by');
    }

    public function referrals()
    {
        return $this->hasMany(Self::class, 'referred_by');
    }


}
