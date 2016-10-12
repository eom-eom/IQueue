<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipality;
use App\Http\Requests;

class MunicipalityController extends Controller
{
    public function getMunicipality(Request $request){
    	$ProvinceCode = $request->input('ProvinceCode');

    	$rows = Municipality::where('ProvinceCode',$ProvinceCode)->get();
		return $rows;
    }
}
