<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
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
    public function updateAccountUsername(Request $request){
        $validator =  Validator::make($request->all(), array(
            'user_name' => 'required'
        ));
                 
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],408);
        }
        $user_id = $request->input('user_id');
        $user_name = $request->input('user_name');
        $res = User::where('user_id', $user_id)->update(array('user_name'=> $user_name));
        return response()->json(['message' => 'Account username updated successfully.']);
    }

    public function updateAccountPassword(Request $request){
        
        $validator =  Validator::make($request->all(), array(
            'password' => 'required'
        ));
        $current_password = $request->input('current_password');
        $new_password = $request->input('password'); 
        
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],408);
        }

        $user_id = $request->input('user_id');
        $current_password  = $request->input('current_password');
        $new_password = bcrypt($request->input('password'));
        $user = User::find($user_id);

        if (!Hash::check($current_password, $user->password)){
             return response()->json(['message' => 'Incorrect current password.']);
        }else
        {
            $res = User::where('user_id', $user_id)->update(array('password'=> $new_password));
        return response()->json(['message' => 'Account password updated successfully.']);
        }
       
    } 

    public function updateAccountEmail(Request $request){
        $validator =  Validator::make($request->all(), array(
            'email' => 'required'
        ));
                 
        if ($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],408);
        }
        $user_id = $request->input('user_id');
        $email = $request->input('email');
        $res = User::where('user_id', $user_id)->update(array('email'=> $email));
        return response()->json(['message' => 'Account email updated successfully.']);
    } 
}
