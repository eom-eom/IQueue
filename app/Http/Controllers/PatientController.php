<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;
use Validator, Input, Redirect; 

class PatientController extends Controller
{
	public function savePatient(Request $request){
    	
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

    	$res = Patient::create($request->all());
	    //return $res;
        return response()->json(['message' => 'Information saved successfully.']);
    }

    public function updateContactOfPatient(Request $request){
        $contact_id = $request->input('contact_id');
        $patient_id = $request->input('patient_id');

        $res = Patient::where('patient_id', $patient_id)->update(array('contact_id' => $contact_id));
        //return $res;
    }

    public function updateAddressOfPatient(Request $request){
        $address_id = $request->input('address_id');
        $patient_id = $request->input('patient_id');
        
        $res = Patient::where('patient_id', $patient_id)->update(array('address_id' => $address_id));
       // return $res;
    }
    
    
}
