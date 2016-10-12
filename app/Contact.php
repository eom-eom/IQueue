<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contacts';
    protected $fillable = [
        'contact_id', 'phone_no', 'mobile_no', 'email', 'fax',
    ];
}
