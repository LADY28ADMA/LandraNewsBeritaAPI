<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class user_profile extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'user_profiles';

protected $fillable = [
    'writer',
    'email',
    'password',
    'status',
];
}
