<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator, Input, Redirect;
class UserController extends Controller
{
    //
    public function saveUser(Request $request){

    	$validator =  Validator::make($request->all(), array(
    		'user_type_id' =>  'required',
    		'user_name' => 'required',
    		'password' => 'required'
    	));

    	if ($validator->fails())
    	{
    		return response()->json(['error'=>$validator->errors()],408);
    	}
    	$res = User::create($request->all());
    	return response()->json(['message' => 'User saved successfully.']);

    	//must bcrypt the password
    }
}
