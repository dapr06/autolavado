<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\Myvehicle;
use App\Models\User;

class Client extends Model
{
    use HasFactory;

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
    public function myvehicles()
    {
        return $this->hasMany(Myvehicle::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($client) {
            if ($client->user) {
                $client->user->delete();
            }
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'role'
    ];

}
