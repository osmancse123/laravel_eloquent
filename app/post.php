<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
     protected $fillable = [
        'admin_id', 'category_id', 'title', 'description',
    ];

    public function category()
    {
    	return $this->belongsTo('App\category');
    }

    public function admin()
    {
    	return $this->belongsTo('App\admin');
    }


}
