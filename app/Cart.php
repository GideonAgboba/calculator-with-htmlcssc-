<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'path',
        'quantity',
    ];

    public function cartuser(){
        return $this->hasMany('App\User');
    }
}
