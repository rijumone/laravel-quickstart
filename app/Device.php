<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {

    protected $fillable = [
        'brand',
        'model',
        'variant',
    ];

}
