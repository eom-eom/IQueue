<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Http\Requests;
use Validator, Input, Redirect; 

class AddressController extends Controller
{
    public function saveAddress(Request $request){
    	
    	 $validator = Validator::make($request->all(), array(
            'region_code' => 'required',  
            'province_code' => 'required', 
            'municipality_code' => 'required', 
            'barangay_code' => 'required'      
        ));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}

    	$res = Address::create($request->all());
        return $res;
		//return response()->json(['message' => 'Address saved successfully.']);
    }

    
}
