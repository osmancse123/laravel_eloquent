<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
     protected $fillable = [
        'name', 'email',
    ];


  	public function phone()
  	{
  		return $this->hasOne('App\phone');
  	}

  	public function post()
  	{
  		return $this->hasMany('App\post');
  	}
  	
}
