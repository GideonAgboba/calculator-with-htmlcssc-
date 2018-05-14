<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'username',
        'gender',
        'firstname',
        'lastname',
        'email',
        'address',
        'phone',
        'country',
        'state',
        'city',
        'zip',
        'bio',
        'password',
        'path',
        'hash',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function roles(){
    //     return $this->hasOne('App\Role');
    // }
    // public function carts(){
    //     return $this->hasMany('App\Cart');
    // }
}
