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
            
        $patient_id = $request->input('patient_id');
        
        $res = Patient::where('patient_id', $patient_id)->update(array('address_id' => $address_id));
       // return $res;
    }
    public function getPatientInfo(Request $request){
        $patient_id = $request->input('patient_id');
        $rows = Patient::Join('address','patients.address_id' ,'=' , 'address.address_id')->join('contacts','patients.contact_id','=','contacts.contact_id')->join('regions','regions.regionCode','=','address.regionCode')->join('provinces','provinces.provinceCode','=','address.provinceCode')->join('municipalities', 'address.municipalitycode','=', 'municipalities.municipalitycode')->join('barangay', 'address.barangaycode','=', 'barangay.barangaycode')->where('patient_id',$patient_id)->get();
        //orderby('in_time')->paginate(10);
        
        if($rows)
        {
            // return response()->json(['data'=>array(array('in_time','123'))]);
            return $rows;
        }
        else
        {
            return response()->json(['message' => 'No records found.']);
        }
    }
    
    
}
