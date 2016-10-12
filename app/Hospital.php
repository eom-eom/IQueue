<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    //
    protected $table = 'hospitals';
    protected $fillable = [
        'hospital_id', 'name', 'address_id', 'contact_id',
    ];
}



	