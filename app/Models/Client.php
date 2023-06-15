<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;
use App\Models\User;

class Client extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->hasMany(Vehicle::class);
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

}
