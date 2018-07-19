<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
	
	public function user(){
		return $this->belongsTo('App\User');
	}
}
