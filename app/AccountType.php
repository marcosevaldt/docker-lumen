<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
	protected 	$fillable 	= ['description', 'class'];
	public 		$timestamps = false;
}
