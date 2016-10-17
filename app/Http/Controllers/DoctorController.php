<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
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
    public function getDoctorInfo(Request $request){
        $doc_id = $request->input('doctor_id');
        $rows = Doctor::Join('doctors_hospital_address' ,'doctors.doctor_id' ,'=' , 'doctors_hospital_address.doctor_id')->join('hospitals','doctors_hospital_address.hospital_id','=','hospitals.hospital_id')-> join('doctor_scheds','doctors_hospital_address.hospital_id','=','hospitals.hospital_id')->where('doctors.doctor_id',$doc_id)->get();
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
    // public function getDoctorList(){
    //     $rows = Doctor::all();
    //     return $rows;
    // }
    
}
