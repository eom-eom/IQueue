<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = 'patients';
    protected $fillable = [
        'patient_id', 'first_name', 'last_name', 'middle_name', 'birth_date', 'gender', 'age', 'address_id', 'contact_id',
    ];
}
