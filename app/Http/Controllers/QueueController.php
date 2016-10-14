<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Queues;
use Validator, Input, Redirect;

class QueueController extends Controller
{
    //
	public function saveQueues(Request $request){

    	$validator =  Validator::make($request->all(), array(
    		'patient_id' =>  'required',
    		'queue_no' => 'required',
    		'doctor_id' => 'required',
    		'created_at' => 'required',
    		'status' => 'required',
    		'time_rendered' => 'required',
    		'qs_id' => 'required'

    	));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}
    	$res = Queues::create($request->all());
    	return response()->json(['message' => 'User saved successfully.']);

    	//must bcrypt the password
    }

    //update and render 
}
