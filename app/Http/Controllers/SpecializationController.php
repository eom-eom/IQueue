<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\Http\Requests;
use Validator, Input, Redirect; 

class SpecializationController extends Controller
{
    //
    public function saveSpecialization(Request $request){

    	$validator =  Validator::make($request->all(), array(
    		'description' =>  'required',
    		'expertise_id' => 'required'
    	));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}
    	$res = Specialization::create($request->all());
    	return response()->json(['message' => 'Specialization saved successfully.']);
    }
}
