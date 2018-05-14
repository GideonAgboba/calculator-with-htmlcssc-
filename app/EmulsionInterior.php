<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmulsionInterior extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'path',
    ];
}
