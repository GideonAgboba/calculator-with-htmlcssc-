<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'owner',
        'user_id',
        'msg',
        'path',
    ];
}
