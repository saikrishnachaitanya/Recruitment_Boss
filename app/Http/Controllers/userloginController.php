<?php

namespace App\Http\Controllers;
use registration;
use Illuminate\Http\Request;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\RolePermissions;
use App\Models\Permissions;
use Auth;
use DB;
class userloginController extends Controller
{
    //
    public function login(Request $request)
    {
         $data = $request->all();
    	    	if(Auth::attempt(['email'=>$data['eml'], 'password'=>$data['pwd']]))
    	{
    
    		$user = DB::table('registrations')->where([ 'email' => $data['eml']])->first();
           return view('layouts.more1', ['user'=>$user]);
    	}
    	else
    	{
    		echo "failure";
    	}
    }
}
