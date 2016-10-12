<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorScheds extends Model
{
    //
    protected $table = 'doctor_scheds';
    protected $fillable = [
        'doctor_scheds_id', 'ds_day', 'ds_time',
    ];
}



