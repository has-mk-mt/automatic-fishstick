<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User2 extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

}
