<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'client_id','first_name','last_name', 'middle_name', 'birth_date',
    ];
}
