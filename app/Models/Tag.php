<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   	public function books()
   	{
   		return $this->belongsToMany('App\Models\Book');
   	}
}
