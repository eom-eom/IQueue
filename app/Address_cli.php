<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address_cli extends Model
{
    //
    protected $fillable = [
        'address_cli_id','client_id', 'address_id',
    ];
}
