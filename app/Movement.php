<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
	protected 	$fillable 	= ['account_id', 'movement_type_id', 'movement_date' , 'value'];
	public 		$timestamps = false;
	
	public function account()
	{
	    return $this->belongsTo('App\Account');
	} 

	public function movementType()
	{
	    return $this->belongsTo('App\MovementType');
	} 
}
