<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'address';
    protected $fillable = [
        'address_id', 'unit_rmno_floor', 'building_name', 'house_building_no', 'subdivision_no', 'region_code',
        'province_code', 'municipality_code', 'barangay_code', 'zip_code', 'street',
    ];
}










