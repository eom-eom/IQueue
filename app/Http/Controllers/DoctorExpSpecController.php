<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\DoctorExpSpec;
use Validator, Input, Redirect;

class DoctorExpSpecController extends Controller
{
    //
    public function saveDoctorExpSpec(Request $request){

    	$validator =  Validator::make($request->all(), array(
    		'doctor_id' =>  'required',
    		'expertise_no' => 'required',
    		'specialization_id' => 'required'
    		
    	));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}
    	$expertise_id = $request->input('expertise_id');
        $doc_id = $request->input('doctors_id');
        $specialization_id = $request->input('specialization_id');
    	$res = DoctorExpSpec::create($request->all());
    	return $res
		//must bcrypt the password

    }
    public function updateSchedOfDoctor(Request $request){
        $expertise_id = $request->input('expertise_id');
        $doc_id = $request->input('doctors_id');
        $specialization_id = $request->input('specialization_id');
        $res = DoctorHospitalAddress::where('doctors_id', $doc_id)->update(array('expertise_id' => $expertise_id,'specialization_id'=>$specialization_id));
        return $res;
    }
}
