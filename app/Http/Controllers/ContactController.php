<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Http\Requests;
use Validator, Input, Redirect; 

class ContactController extends Controller
{
    public function saveContact(Request $request){
    	
    	 $validator = Validator::make($request->all(), array(
            'mobile_no' => 'required'       
        ));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}

    	$res = Contacts::create($request->all());
		return $res;
    }

    
}
