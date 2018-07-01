<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected 	$fillable 	= ['agency_id', 'customer_id', 'account_type_id', 'line', 'opening'];
	public 		$timestamps = false;
	
	public function agency()
	{
	    return $this->belongsTo('App\Agency');
	}
	
	public function customer()
	{
	    return $this->belongsTo('App\Customer');
	}
	
	public function accountType()
	{
	    return $this->belongsTo('App\AccountType');
	} 
}
