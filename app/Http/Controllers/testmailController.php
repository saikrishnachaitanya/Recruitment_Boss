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
use Mail;

class testmailController extends Controller
{
    //
    //public function sendmail($user_email)
    /*{
    	echo $user_email;
    	$name='tochaitu';
Mail::send(['text'=>'testmail'],['name','chaitu'],function($message){
	$message->to($user_email, $name)->subject('testmail');
	$message->from('141fa04112@gmail.com','chaitu');
});
return view('layouts.mail_result');
    }*/
    public function sendmail($user_email)
   {
  // $data=array(['email'=>$user_email , 'name'=>'tochaitu']);
    $data = [
       'email' => $user_email
];
Mail::send(['text'=>'testmail'],['name','chaitu'],function($message) use ($data) {
	$message->to($data['email'])->subject('Interview Result');
	$message->from('141fa04112@gmail.com','chaitu');
});
$value = registration::where([ 'email' => $user_email])->first();
$value->status="accepted";
$value->save();
      return view("layouts.mail_result");


      
            }
}