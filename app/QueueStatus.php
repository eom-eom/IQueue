<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueueStatus extends Model
{
    //
    protected $table = 'queue_status';
    protected $fillable = [
        'qs_id', 'description', 
    ];

}


