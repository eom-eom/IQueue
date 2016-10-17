<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator, Input, Redirect;
class UserController extends Controller
{
    //For admin
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


        // sign up username ,email address, confirm password
    public function signUp (Request $request){
        $validator =  Validator::make($request->all(), array(
            'user_type_id'=> 'required',
            'user_name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ));
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],408);
        }

        $res = User::create($request->all());
        return response()->json(['message' => 'Account saved successfully.']);


    }
    public function updateAccount(Request $request){
        $validator =  Validator::make($request->all(), array(
            'user_name' => 'required |',
            'password' => 'required',
            'email' => 'required'
        ));
                 
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],408);
        }
        $user_id = $request->input('user_id');

     

        $res = User::where('user_id', $user_id)->update($request->all());
        
        return response()->json(['message' => 'Account updated successfully.']);
    }

}
