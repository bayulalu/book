<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = "books";
    protected $guarded = ['id'];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    } 
}
