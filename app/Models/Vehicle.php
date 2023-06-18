<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Vehicle extends Model
{
    use HasFactory;

    /*public function client()
    {
        return $this->belongsTo(Client::class);
    }*/
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

}
