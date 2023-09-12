<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Komik extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'komik';

    protected $fillable = [
        'nama_komik',
        'author_komik',
        'img_komik',
        'desc_komik',
        'created_at',
        'updated_at',
    ];
}