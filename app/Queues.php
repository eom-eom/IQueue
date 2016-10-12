<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queues extends Model
{
    //
    protected $table = 'queues';
    protected $fillable = [
        'queue_id', 'patient_id', 'queue_no', 'doctor_id', 'created_at', 'status',
        'time_rendered', 'qs_id', 
    ];
}









