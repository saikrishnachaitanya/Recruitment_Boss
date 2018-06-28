<?php

namespace App\Http\Controllers\Auth;

use App\registration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

   // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = '/abcd';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   // public function __construct()
   /* {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
 /*   protected function validator(array $data)
    {
        return Validator::make($data, [
            'first' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }*/
   
   public function show(Request $request)
    {
        return view('layouts.RegisterForm');
    }
public function store(Request $request)
    {
            
    $user= new registration;
        $user->first= $request['first'];
        $user->last= $request['last'];
        $user->address= $request['address'];
        $user->permanent= $request['permanent'];
        $user->email= $request['email'];
        $user->password= bcrypt($request['password']);
    // add other fields
    $user->save();

        return view('layouts.Result_msg');

    }
    /*public function getdata()
    {
        $data=DB::table('registrations')->get();
        if(count($data)>0)
        {
return view('layouts.getForm')->with('',);
        }
        else
        {
return view('layouts.getForm');
        }
    }

}*/
}
