<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\DoctorHospitalAddress;
use App\Http\Requests;
use Validator, Input, Redirect; 

class DoctorController extends Controller
{
    var $doc_id="";
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
        
        //if condition wala pa sya nilagay
        $doc_id = $res->id;
        // $hospital_id = $request->input('hospital_id');
        
        // $res = DoctorHospitalAddress::create($request -> all());
        return response()->json(['message' => 'Information saved successfully.','doc_id' => $doc_id]);

		//return $res;
    }
    
    
}
