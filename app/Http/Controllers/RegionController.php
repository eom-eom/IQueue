<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Http\Requests;

class RegionController extends Controller
{
    public function getRegion(){
    	$rows = Region::all();
		return $rows;
    }
}
