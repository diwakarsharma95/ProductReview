<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price'];
    
    function manufacturer(){
        return $this->belongsTo('App\Manufacturer');
    }
    function reviews(){
        return $this->hasMany('App\Review');
    }
    function review_user(){
        return $this->hasManyThrough('User','Review','user_id','review_id');
    }
}
