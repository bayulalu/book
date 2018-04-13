<?php

namespace App\Models;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function book()
    {
    	return $this->belongsTo('App\Models\Book');
    }
    public function isOwner(){
        if (Auth::guest()) {
            return false;
        }

        return Auth::user()->id == $this->user->id;
    }
}
