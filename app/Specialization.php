<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    //
    protected $table = 'specialization';
    protected $fillable = [
        'specialization_id', 'description', 'expertise_id', 
    ];
}



