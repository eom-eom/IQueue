<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;
use App\Http\Requests;

class BarangayController extends Controller
{
    public function getBarangay(Request $request){
    	$MunicipalityCode = $request->input('MunicipalityCode');

    	$rows = Barangay::where('MunicipalityCode',$MunicipalityCode)->get();
		return $rows;
    }
}
