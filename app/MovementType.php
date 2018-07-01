<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementType extends Model
{
	protected 	$fillable 	= ['description', 'debit_credit'];
	public 		$timestamps = false;
}
