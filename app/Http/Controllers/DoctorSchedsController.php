<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorScheds;
use App\Http\Requests;
use Validator, Input, Redirect; 

class DoctorSchedsController extends Controller
{
    //
    public function saveDoctorSched(Request $request){
    	
    	 $validator = Validator::make($request->all(), array(
            'ds_day' => 'required',
            'ds_time' => 'required'
            
           
        ));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}
       
        $res = DoctorScheds::create($request -> all());
       

		return $res;
    }

    



}
