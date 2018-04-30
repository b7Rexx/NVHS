<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    public $fillable = [
        'title',
        'details',
        'video_name'
    ];
}
