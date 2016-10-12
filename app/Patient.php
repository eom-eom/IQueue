<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	
    protected $fillable = ['first_name','last_name','middle_name','birth_date','gender','age'];
    protected $table = 'patients';
}
