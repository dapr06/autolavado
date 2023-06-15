<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Cart;

use App\Models\Client;
use App\Models\Worker;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_CLI = 'CLI';
    const ROLE_TRA = 'TRA';
    const ROLE_ADM = 'ADM';
    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function worker()
    {
        return $this->hasOne(Worker::class);
    }

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}
