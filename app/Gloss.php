<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gloss extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'path',
    ];
}
