<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class image extends Model
{
    public $fillable = [
        'title',
        'details'
    ];
    public function imageReference()
    {
        return $this->hasMany('App\image_ref','image_id','id');
    }
}
