<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorHospitalAddress;
use App\Http\Requests;
use Validator, Input, Redirect; 

class DoctorHospitalAddressController extends Controller
{
    //
    public function saveDoctorHospitalAddress(Request $request){
    	
    	 // $validator = Validator::make($request->all(), array(
      //       'first_name' => 'required',
      //       'last_name' => 'required',
      //       'birth_date' => 'required',
      //       'gender' => 'required',
      //       'age' => 'required'
            
           
      //   ));

    	// if ($validator->fails())
    	// {
    	// 	return response()->json(['error'=>$validator->errors()],408);
    	// }

    	// $res = Doctor::create($request->all());
        
        //if condition wala pa sya nilagay
       // $doc_id = $res->id;
        $hospital_id = $request->input('hospital_id');
        $doc_id = $request->input('doc_id');
        $doc_scheds_id = $request->input('doc_scheds_id');
        $res = DoctorHospitalAddress::create($request -> all());
        //return response()->json(['message' => 'Information saved successfully.']);

		//return $res;
    }
     public function updateContactOfDHA(Request $request){
        $doctors_id = $request->input('doctors_id');
        $hospital_id = $request->input('hospital_id');
        $doc_scheds_id = $request->input('doc_scheds_id');
        $res = DoctorHospitalAddress::where('hospital_id', $hospital_id)->('doc_scheds_id', $doc_scheds_id)->update(array('doctors_id' => $doctors_id,));
        return $res;
    }

    
       
}
