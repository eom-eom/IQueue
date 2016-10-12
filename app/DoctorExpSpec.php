<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorExpSpec extends Model
{
    //
    protected $table = 'doctors_exp_spec';
    protected $fillable = [
        'des_id', 'doctor_id', 'expertise_id', 'specialization_id',
    ];
}




