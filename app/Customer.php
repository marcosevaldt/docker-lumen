<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected 	$fillable 	= ['name', 'document', 'customer_type' , 'city_id'];
	public 		$timestamps = false;
	
	public function city()
	{
	    return $this->belongsTo('App\City');
	} 
}
