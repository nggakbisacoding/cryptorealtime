<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Crypto extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'contact';

    // mendefinisikan kolom yang dapat diisi
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'request',
        'messages',
    ];
}
