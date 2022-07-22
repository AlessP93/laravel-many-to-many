<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['tags'];

    public function category()
    {
        return $this->belongTo('App\Category');
    }

    public function tags()
    {
        return $this->belongToMany('App\Tag');
    }
}
