<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_auth extends Authenticatable
{
  use Notifiable;

    protected $table ='users';
   protected $fillable = [
       'email', 'password'
   ];

     protected $hidden = [
       'password', 'remember_token',
   ];

   public function setPasswordAttribute($password)
   {
    $this->attributes['password'] = bcrypt($password);
   }
}
