<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $table = 'doctors';
    protected $fillable = [
        'doctor_id', 'first_name', 'last_name', 'middle_name', 'address_hos_id', 'gender',
    ];
}
