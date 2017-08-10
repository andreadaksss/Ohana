<?php

namespace App;
use App\Spouse;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable =
    [
        'email',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function spouses()
    {
        return $this->hasMany(Spouse::class);
    }

    
}
