<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\registration;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\RolePermissions;
use App\Models\Permissions;
use Auth;
use DB;


class DashboardController extends Controller
{
    //
    public function getdata()
   {
   	  $value=DB::table('registrations')->get();
           return view('layouts.dashboard', ['value'=>$value]);  
            }

            public function login_msg()
   {
   
           return view('layouts.login');   
       }

       public function dashboard()
   {
   
           return view('layouts.dashboard');   
       }


            public function specific($data_email)
   {
    $user = registration::where([ 'email' => $data_email])->first();
           return view('layouts.more', ['user'=>$user]);  

            }
        }
