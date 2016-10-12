<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorHospitalAddress extends Model
{
    //
    protected $table = 'doctors_hospital_address';
    protected $fillable = [
        'da_id', 'hospital_id', 'doctors_id', 'doctor_scheds_id',
    ];
}



