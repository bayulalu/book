<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = "books";
    protected $guarded = ['id'];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    } 

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    
    public function isOwner(){
    	if (Auth::guest()) {
    		return false;
    	}

    	return Auth::user()->id == $this->user->id;
    }


}
