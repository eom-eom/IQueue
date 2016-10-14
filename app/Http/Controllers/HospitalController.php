<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Http\Requests;
use Validator, Input, Redirect;

class HospitalController extends Controller
{
    public function saveHospital(Request $request){
    	
    	 $validator = Validator::make($request->all(), array(
            'name' => 'required'       
        ));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}

    	$res = Hospital::create($request->all());
		//return $res;

       // return $res->id;
        return response()->json(['message' => 'Hospital saved successfully.']);
    }

    public function updateContactOfHD(Request $request){
        $contact_id = $request->input('contact_id');
        $hospital_id = $request->input('hospital_id');

        $res = Hospital::where('hospital_id', $hospital_id)->update(array('contact_id' => $contact_id));
        //return $res;
    }

    public function updateAddressOfHD(Request $request){
        $address_id = $request->input('address_id');
        $hospital_id = $request->input('hospital_id');
        
        $res = Hospital::where('hospital_id', $hospital_id)->update(array('address_id' => $address_id));
        //return $res;
    }
}
