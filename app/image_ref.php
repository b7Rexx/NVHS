<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image_ref extends Model
{
    public $table = 'images_references';
    public $timestamps = true;
    public $fillable = [
        'image_id',
        'image_name'
    ];
}
