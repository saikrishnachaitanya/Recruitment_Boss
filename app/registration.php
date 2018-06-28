<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class registration extends Authenticatable
{
    //
    use Notifiable;
     use HasRoles;

     protected $fillable = [
        'first', 'last', 'address', 'permanent', 'email','password',
    ];
}
