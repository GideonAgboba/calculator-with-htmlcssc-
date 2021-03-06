<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    protected $fillable = [
        'owner',
        'firstname',
        'lastname',
        'email',
        'phone',
        'status',
        'hash',
        'path',
        'user_id',
        'items',
        'price',
        'address',
        'delivery_date',
    ];
}
