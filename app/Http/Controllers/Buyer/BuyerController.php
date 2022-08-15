<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{

    public function dashboard(Request $request){

        $sessionuser  = $request->session()->get('RetailerData');
        
        $UserProfile = DB::table('users')->where('email',$sessionuser[0]->email)->get();
       

        foreach($UserProfile as $profile){
            $id = $profile->id;
            $username  = $profile->username;
            $password  = $profile->password;
            $email     = $profile->email;
            $workemail = $profile->workEmail;
            $joiningDate = $profile->joiningDate;
            $Name = $profile->goodName;
            $role = $profile->role;
            $status = $profile->Status;
        }
        
       return view('foodbusiness.dashboard',[
            'id'=> $id,
            'username'  =>  $username,
            'password'  =>  $password,
            'email'     =>  $email,
            'workEmail' =>  $workemail,
            'joinD'     =>  $joiningDate,
            'name'      =>  $Name,
            'role'      =>  $role,
            'status'    =>  $status,
        ]);
    }

    public function logout(Request $request){
        if($request->session()->exists('RetailerData')){
            $request->session()->pull('RetailerData');
            $request->session()->flush();
        }
        return redirect('/login');
    }


    public function bookings(Request $request){
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email',$sessionuser[0]->email)->get();
        foreach($UserProfile as $profile){
            $id = $profile->id;
            $username  = $profile->username;
            $password  = $profile->password;
            $email     = $profile->email;
            $workemail = $profile->workEmail;
            $joiningDate = $profile->joiningDate;
            $Name = $profile->goodName;
            $role = $profile->role;
            $status = $profile->Status;
        }
        return view('FoodBusiness\bookings',[
            'id'=> $id,
            'username'  =>  $username,
            'password'  =>  $password,
            'email'     =>  $email,
            'workEmail' =>  $workemail,
            'joinD'     =>  $joiningDate,
            'name'      =>  $Name,
            'role'      =>  $role,
            'status'    =>  $status,
        ]);
    }
    public function calendar(Request $request){
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email',$sessionuser[0]->email)->get();
        foreach($UserProfile as $profile){
            $id = $profile->id;
            $username  = $profile->username;
            $password  = $profile->password;
            $email     = $profile->email;
            $workemail = $profile->workEmail;
            $joiningDate = $profile->joiningDate;
            $Name = $profile->goodName;
            $role = $profile->role;
            $status = $profile->Status;
        }
        return view('FoodBusiness\calendar',[
            'id'=> $id,
            'username'  =>  $username,
            'password'  =>  $password,
            'email'     =>  $email,
            'workEmail' =>  $workemail,
            'joinD'     =>  $joiningDate,
            'name'      =>  $Name,
            'role'      =>  $role,
            'status'    =>  $status,
        ]);
    }

    public function profile(Request $request){
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email',$sessionuser[0]->email)->get();
        foreach($UserProfile as $profile){
            $id = $profile->id;
            $username  = $profile->username;
            $password  = $profile->password;
            $email     = $profile->email;
            $workemail = $profile->workEmail;
            $joiningDate = $profile->joiningDate;
            $Name = $profile->goodName;
            $role = $profile->role;
            $status = $profile->Status;
            $salt = $profile->salt;
        }
        
        $BusinessProfile = DB::table('bussiness_information')->where('user_id',$sessionuser[0]->id)->get();
        $bbtype = [];
        foreach($BusinessProfile as $bprofile){
            $bid = ($bprofile->id ) ? $bprofile->id : "0";
            $bname = ($bprofile->bussiness_name) ? $bprofile->bussiness_name : "Your Business Name";
            $bcat = ($bprofile->business_category) ? $bprofile->business_category : "Your Business Category";
            $bdescription = ($bprofile->business_description) ? $bprofile->business_description : "Your Business Description";
            $bbtype = ($bprofile->product_type) ? json_decode($bprofile->product_type) : "[0]";
            $bstage = ($bprofile->business_stage) ? $bprofile->business_stage : "Your Business Stage";
            $blogo = ($bprofile->logo) ? $bprofile->logo : "Your Logo";

        }
 
        return view('FoodBusiness\profile',[
            'id'=> $id,
            'username'  =>  $username,
            'password'  =>  $password,
            'email'     =>  $email,
            'workEmail' =>  $workemail,
            'joinD'     =>  $joiningDate,
            'name'      =>  $Name,
            'role'      =>  $role,
            'status'    =>  $status,
            'salt'      => $salt,
            'bid'       => $bid,
            'bname'     => $bname,
            'bcat'      => $bcat, 
            'bdescription' => $bdescription,
            'btype'         => $bbtype,
            'bstage'        => $bstage,
            'blogo' => $blogo,
        ]);
    }


    public function updateprofile(Request $request){
         
        $sessionuser  = $request->session()->get('RetailerData');
        $userupdate = DB::table('users')->where('email',$sessionuser[0]->email)->update([
            'goodName' => $request['fname']
        ]);

        if($userupdate){
            return "Data Updated";
        }
        else{
            return "Data Not Updated";
        }

    }

    
    public function updatebusiness(Request $request){
        $sessionuser  = $request->session()->get('RetailerData');
        $bname = $request->input('bname');
        $bcat = $request->input('bcategory');
        $bdescription = $request->input('descriptionbusinesss');
        $btype = $request->input('typesofproduct');
        $bstage = $request->input('business_stage');


        if($request->hasFile('logofile')){
            $file = $request->file('logofile')->getClientOriginalName();
            $save = time()."_".$file;
            $uploaded = $request->file('logofile')->move(public_path('uploads'),$save);
            if($uploaded){
               
                $findbusiness = DB::table('bussiness_information')->where('user_id',$sessionuser[0]->id)->count();
                if($findbusiness > 0){
                    $insertorupdate = DB::table('bussiness_information')->where('user_id',$sessionuser[0]->id)->update([
                        'bussiness_name'=> ($bname) ? $bname : "Empty Name",
                        'business_category'=> ($bcat) ? $bcat : "Empty Category",
                        'business_description' => ($bdescription) ? $bdescription : "Empty Description",
                        'product_type' => json_encode($btype),
                        'business_stage' => ($bstage) ? $bstage : "Empty Stage",
                        'logo' => $save,
                        'status'=> 'Active',
                        'user_id' =>$sessionuser[0]->id,
                    ]);
                    return redirect()->back();
                }
                else 
                {
                    $insertorupdate = DB::table('bussiness_information')->where('user_id',$sessionuser[0]->id)->updateOrInsert([
                        'bussiness_name'=> $bname,
                        'business_category'=> $bcat,
                        'business_description' => $bdescription,
                        'product_type' => json_encode($btype),
                        'business_stage' => $bstage,
                        'logo' => $save,
                        'status'=> 'Active',
                        'user_id' =>$sessionuser[0]->id,
                    ]);
                    return redirect()->back();
                }
               
            }
        }
        else{
            return "NO FILE ATTACH";
        }
       
       

    }

    public function confirmpayment(Request $request){
        return $request;
    }

    public function securitypass(Request $request){
        return $request;
    }

    public function socailmedia(Request $request){
        return $request;
    }

    public function documents(Request $request){
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email',$sessionuser[0]->email)->get();
        foreach($UserProfile as $profile){
            $id = $profile->id;
            $username  = $profile->username;
            $password  = $profile->password;
            $email     = $profile->email;
            $workemail = $profile->workEmail;
            $joiningDate = $profile->joiningDate;
            $Name = $profile->goodName;
            $role = $profile->role;
            $status = $profile->Status;
            $salt = $profile->salt;
        }
 
        return view('FoodBusiness.document',[
            'id'=> $id,
            'username'  =>  $username,
            'password'  =>  $password,
            'email'     =>  $email,
            'workEmail' =>  $workemail,
            'joinD'     =>  $joiningDate,
            'name'      =>  $Name,
            'role'      =>  $role,
            'status'    =>  $status,
            'salt'      => $salt,
        ]);
       
    }
}
