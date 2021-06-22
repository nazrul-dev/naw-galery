<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends  Authenticatable
{
    use HasFactory, Notifiable;

 
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
   
      
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */




    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



  
}
