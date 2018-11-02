<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function product(){
        return $this->belongsTo('App\Product');
    }
    function user(){
        return $this->belongsTo('App\User');
    }
    function like(){
        return $this->hasMany('App\Like');
    }
    function dislike(){
        return $this->hasMany('App\Dislike');
    }
}
