<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
	protected 	$fillable 	= ['name', 'city_id'];
	public 		$timestamps = false;
	
	public function city()
	{
	    return $this->belongsTo('App\City');
	} 
}
