<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Admin extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /* Telling the model that these are the only fields that can be mass assigned. */
    protected $fillable = [
        'full_name',
        'email',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
