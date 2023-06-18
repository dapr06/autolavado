<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'phone', 'DNI', 'email', 'role', 'turn'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($worker) {
            if ($worker->user) {
                $worker->user->delete();
            }
        });
    }

}
