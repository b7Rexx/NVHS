<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public $fillable = [
        'title',
        'starting_date',
        'ending_date',
        'location',
        'image',
        'details',
        'image_id'
    ];
}
