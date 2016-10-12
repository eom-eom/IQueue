<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $table = 'address';
     protected $fillable = ['region_code','province_code','municipality_code','barangay_code'];
}
