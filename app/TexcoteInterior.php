<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TexcoteInterior extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'path',
    ];
}
