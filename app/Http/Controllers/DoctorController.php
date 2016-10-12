<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests;
use Validator, Input, Redirect; 

class DoctorController extends Controller
{
    public function saveDoctor(Request $request){
    	
    	 $validator = Validator::make($request->all(), array(
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'age' => 'required'
            
           
        ));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}

    	$res = Doctor::create($request->all());
		return $res;
    }

    
}
