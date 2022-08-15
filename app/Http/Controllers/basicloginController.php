<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class basicloginController extends Controller
{
    public function login(Request $request){
       
        $affected =  DB::table('users')->where('email', $request->input('useremail'))->get();
        if($affected->isEmpty()){
            $request->session()->flash('status', 'No User Found Or Verification is Pending');
            return redirect('/login');
        }
        else{
            $affectedpassword=  DB::table('users')->where('email', $request->input('useremail'))->get();  
            $haspassword =  Hash::check($request->input('userpassword'), $affectedpassword[0]->password);
            if($haspassword){
                $alluserdata =  DB::table('users')->select('role')->where('email', $request->input('useremail'))->get();
                if($alluserdata[0]->role === 'retailer' ){
                    $alluserdataforreatiler =  DB::table('users')->where('email', $request->input('useremail'))->get();
                    $request->session()->put('RetailerData',$alluserdataforreatiler);
                    return redirect('/Retailer/dashboard');
                }
                elseif( $alluserdata[0]->role === 'subscriber'){
                    $alluserdataforsubscriber =  DB::table('users')->where('email', $request->input('useremail'))->get();
                    $request->session()->put('RetailerData',$alluserdataforsubscriber);
                    return redirect('/Subscriber/dashboard');
                }
                else{
                    return "login issue Please Contact Admin Or Developer";
                }
            }
            else{
                return "not matched";
            }
           
        }
    }
}
