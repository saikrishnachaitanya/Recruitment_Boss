<?php

namespace App\Http\Controllers;
use User;
use Illuminate\Http\Request;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\RolePermissions;
use App\Models\Permissions;
use Validator;
use Auth;
use DB;
class LoginController extends Controller
{
    //
    public function dologin(Request $request)
    {
        //die('hi');
        $data = $request->all();
        //$data['password'] = Hash::make('password');
         $validator = Validator::make($data, [
                        'email' => 'required|email|exists:users',
                        'password' => 'required'
                        ]);

        if ($validator->fails()) {
          return redirect()->action('LoginController@getlogin');
        }
        else{
          $userData = array('email' => $data['email'], 'password' => $data['password']);

          if (Auth::attempt($userData)) {
           $userAuth = Auth::User();
      $value=DB::table('registrations')->get();
           return view('layouts.Result_msg1', ['value'=>$value]);
           }

           else {
            $value=DB::table('registrations')->get();
           return view('layouts.Result_msg1', ['value'=>$value]);
           }
    
      }   
     
  }
}

/*$value=DB::table('registrations')->get();
           return view('layouts.Result_msg1', ['value'=>$value]);