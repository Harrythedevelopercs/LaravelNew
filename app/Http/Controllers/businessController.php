<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\businesssignup;
use Illuminate\Support\Facades\Crypt;


class businessController extends Controller
{
    public function signup(Request $request){
        $useremail = $request['useremail'];
        $username = $request['first_name'];
        $password = $request['password'];
        $userdb = DB::table('users')->where('email' , $useremail)->get();
        $salt = Hash::make($username.":". $useremail);
        if(empty($empty_array))
            try{
            $newuser = DB::table('users')->insertGetId([
                'username' => $username."-".date('Ymd'),
                'password' => Hash::make($password),
                'email' => $useremail, 
                'goodName' => $request['first_name'] . ' ' . $request['last_name'],
                'WorkEmail' => null,
                'Status'=> 'Pending',
                'joiningDate' => date('d-m-Y'),
                'role' => 'subscriber',
                'salt' =>  $salt
            ]);
                $userdata = [
                    'useremail' => $useremail,
                    'salt' =>  $salt
                ];
                $encrypted = Crypt::encrypt($userdata);
                
                return $encrypted;
            }
            catch( \Exception $e  ){
                return $e;
            }
            
        else
            return "not empty ";
    }


    public function verification($useremail){

        Mail::to('hamza.khan@crystal-lite.net')
        ->send(new businesssignup($useremail));
        return view('businessverification',['encrypt'=>$useremail]);
    }

    public function verificationlogin($verification){
        $decrypt =  Crypt::decrypt($verification);
        $useremail = $decrypt['useremail'];
        $usersalt = $decrypt['salt'];
        $userdb = DB::table('users')->where('salt' , $usersalt)->get();
        if(!empty($userdb)){
            $affected =  DB::table('users')->where('salt' , $usersalt)->update(['status'=> 'Active']);
            return redirect('/login');
        }
        else{
            return "Link Expired";
        }
    }

    public function bookings(){
        return view('foodbuiness.bookings');
    }
}
