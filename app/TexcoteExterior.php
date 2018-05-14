<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TexcoteExterior extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'path',
    ];
}
