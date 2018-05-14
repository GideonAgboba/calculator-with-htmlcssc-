<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmulsionExterior extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'path',
    ];
}
