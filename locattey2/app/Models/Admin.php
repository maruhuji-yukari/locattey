<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
<<<<<<< HEAD
{
    use Notifiable;
    protected $fillable =[
        'name','email','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

    protected $casts = [
      'email_verified_at' => 'datetime',
    ];
}
=======
    {
        use Notifiable;

        protected $table = 'Admin';
        protected $timestamps = true;

        protected $fillable = [
          'name',
          'email',
          'password',
          'role',
          'updated_at'
        ];

        protected $hidden = [
            'password','remember_token'
        ];
    }
>>>>>>> master
