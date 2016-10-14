<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expertise;
use App\Http\Requests;
use Validator, Input, Redirect; 


class ExpertiseController extends Controller
{
    //
    public function saveExpertise(Request $request){

    	$validator =  Validator::make($request->all(), array(
    		'description' =>  'required'
    	));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}
    	$res = Expertise::create($request->all());
    	return response()->json(['message' => 'Expertise saved successfully.']);
    }
}
