<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
     protected $fillable = [
        'admin_id', 'phone',
    ];


    public function admin()
    {
    	return $this->belongsTo('App\admin');
    }
}
