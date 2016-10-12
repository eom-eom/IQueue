<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Http\Requests;

class ProvinceController extends Controller
{
    public function getProvince(Request $request){
    	$RegionCode = $request->input('RegionCode');

    	$rows = Province::where('RegionCode',$RegionCode)->get();
		return $rows;
    }
}
