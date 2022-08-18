<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;




class BuyerController extends Controller
{

    public function dashboard(Request $request)
    {

        $sessionuser  = $request->session()->get('RetailerData');

        $UserProfile = DB::table('users')->where('email', $sessionuser[0]->email)->get();


        foreach ($UserProfile as $profile) {
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

        return view('FoodBusiness.dashboard', [
            'id' => $id,
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

    public function logout(Request $request)
    {
        if ($request->session()->exists('RetailerData')) {
            $request->session()->pull('RetailerData');
            $request->session()->flush();
        }
        return redirect('/login');
    }


    public function bookings(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email', $sessionuser[0]->email)->get();
        foreach ($UserProfile as $profile) {
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
        return view('FoodBusiness.bookings', [
            'id' => $id,
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
    public function calendar(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email', $sessionuser[0]->email)->get();
        foreach ($UserProfile as $profile) {
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
        return view('FoodBusiness.calendar', [
            'id' => $id,
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

    public function profile(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email', $sessionuser[0]->email)->get();
        foreach ($UserProfile as $profile) {
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

        $BusinessProfile = DB::table('bussiness_information')->where('user_id', $sessionuser[0]->id)->get();

        if (sizeof($BusinessProfile) != 0) {
            $bbtype = [];
            foreach ($BusinessProfile as $bprofile) {
                $bid = ($bprofile->id) ? $bprofile->id : "0";
                $bname = ($bprofile->bussiness_name) ? $bprofile->bussiness_name : "Your Business Name";
                $bcat = ($bprofile->business_category) ? $bprofile->business_category : "Your Business Category";
                $bdescription = ($bprofile->business_description) ? $bprofile->business_description : "Your Business Description";
                $bbtype = ($bprofile->product_type) ? json_decode($bprofile->product_type) : "[0]";
                $bstage = ($bprofile->business_stage) ? $bprofile->business_stage : "Your Business Stage";
                $blogo = ($bprofile->logo) ? $bprofile->logo : "Your Logo";
            }
        } else {
            $bid = "0";
            $bname =  "Your Business Name";
            $bcat =  "Your Business Category";
            $bdescription =  "Your Business Description";
            $bbtype =  ["0"];
            $bstage =  "Your Business Stage";
            $blogo =  "Your Logo";
        }

        $SocialProfile = DB::table('social_media')->where('user_id', $sessionuser[0]->id)->get();
        if (sizeof($SocialProfile) != 0) {
            foreach ($SocialProfile as $smprofile) {
                $id = ($smprofile->id) ? $smprofile->id : "0";
                $instagram = ($smprofile->instagram) ? $smprofile->instagram : "";
                $facebook = ($smprofile->facebook) ? $smprofile->facebook  : "";
                $twitter = ($smprofile->twitter) ? $smprofile->twitter : "";
                $website = ($smprofile->website) ? $smprofile->website : "";
            }
        } else {
            $id =  "0";
            $instagram =  "";
            $facebook =  "";
            $twitter =  "";
            $website =  "";
        }





        return view('FoodBusiness.profile', [
            'id' => $id,
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
            'instagram' => $instagram,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'website' => $website,
        ]);
    }


    public function updateprofile(Request $request)
    {

        $sessionuser  = $request->session()->get('RetailerData');
        $userupdate = DB::table('users')->where('email', $sessionuser[0]->email)->update([
            'goodName' => $request['fname']
        ]);

        if ($userupdate) {
            return "Data Updated";
        } else {
            return "Data Not Updated";
        }
    }


    public function updatebusiness(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $bname = $request->input('bname');
        $bcat = $request->input('bcategory');
        $bdescription = $request->input('descriptionbusinesss');
        $btype = $request->input('typesofproduct');
        $bstage = $request->input('business_stage');


        if ($request->hasFile('logofile')) {
            $file = $request->file('logofile')->getClientOriginalName();
            $save = time() . "_" . $file;
            $uploaded = $request->file('logofile')->move(public_path('uploads'), $save);
            if ($uploaded) {

                $findbusiness = DB::table('bussiness_information')->where('user_id', $sessionuser[0]->id)->count();
                if ($findbusiness > 0) {
                    $insertorupdate = DB::table('bussiness_information')->where('user_id', $sessionuser[0]->id)->update([
                        'bussiness_name' => ($bname) ? $bname : "Empty Name",
                        'business_category' => ($bcat) ? $bcat : "Empty Category",
                        'business_description' => ($bdescription) ? $bdescription : "Empty Description",
                        'product_type' => json_encode($btype),
                        'business_stage' => ($bstage) ? $bstage : "Empty Stage",
                        'logo' => $save,
                        'status' => 'Active',
                        'user_id' => $sessionuser[0]->id,
                    ]);
                    return redirect()->back();
                } else {
                    $insertorupdate = DB::table('bussiness_information')->where('user_id', $sessionuser[0]->id)->updateOrInsert([
                        'bussiness_name' => $bname,
                        'business_category' => $bcat,
                        'business_description' => $bdescription,
                        'product_type' => json_encode($btype),
                        'business_stage' => $bstage,
                        'logo' => $save,
                        'status' => 'Active',
                        'user_id' => $sessionuser[0]->id,
                    ]);
                    return redirect()->back();
                }
            }
        } else {
            return "NO FILE ATTACH";
        }
    }

    public function confirmpayment(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
    }

    public function securitypass(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $newpass = $request['newpassword'];
        $newpass = Hash::make($newpass);
        $updateuserpassword = DB::table('users')->where('email', $sessionuser[0]->email)->update(['password' => $newpass]);
        if ($updateuserpassword) {
            return "Password Updated Successfully";
        } else {
            return "Please Contact Your Administrator Password Not Changed";
        }
    }

    public function socailmedia(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $instagram = $request['instagram'];
        $facebook = $request['Facebook'];
        $twitter = $request['twitter'];
        $website = $request['Website'];
        $checkif = DB::table('social_media')->where('user_id', $sessionuser[0]->id)->count();
        if ($checkif > 0) {
            $insertsocial = DB::table('social_media')->where('user_id', $sessionuser[0]->id)->update([
                'instagram' => ($instagram) ? $instagram : "Your Instagram account",
                'facebook' => ($facebook) ? $facebook : "Your Facebook account",
                'twitter' => ($twitter) ? $twitter : "Your Twitter account",
                'website' => ($website) ? $website : "Your Website ",
                'status' => 'Active',
                'user_id' => $sessionuser[0]->id
            ]);
            if ($insertsocial) {
                return "Social Media Update ";
            } else {
                return "Error";
            }
        } else {
            $insertsocial = DB::table('social_media')->insert([
                'instagram' => ($instagram) ? $instagram : "Your Instagram account",
                'facebook' => ($facebook) ? $facebook : "Your Facebook account",
                'twitter' => ($twitter) ? $twitter : "Your Twitter account",
                'website' => ($website) ? $website : "Your Website ",
                'status' => 'Active',
                'user_id' => $sessionuser[0]->id
            ]);
            if ($insertsocial) {
                return "Social Media Update ";
            } else {
                return "Error";
            }
        }
    }

    public function documents(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email', $sessionuser[0]->email)->get();
        foreach ($UserProfile as $profile) {
            $id = $profile->id;
            $username  = $profile->username;
            $Name = $profile->goodName;
        }
        $documents = DB::table('userdocuments')->where('user_id', $sessionuser[0]->id)->get();
        $documentsprivateuserdocuments = DB::table('privateuserdocuments')->where('user_id', $sessionuser[0]->id)->get();


        return view('FoodBusiness.document', [
            'id' => $id,
            'name' => $Name,
            'documents' => $documents,
            'documentsp' => $documentsprivateuserdocuments,
        ]);
    }

    public function vupload(Request $request)
    {
        if ($request->hasfile('files')) {
            $sessionuser  = $request->session()->get('RetailerData');
            foreach ($request->file('files') as $file) {
                $name = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $name);
                $data[] = $name;
                $uploadtodatabase = DB::table('userdocuments')->insert([
                    'documenturl'   => $name,
                    'title'         => $file->getClientOriginalName(),
                    'extension'     => $file->getClientOriginalExtension(),
                    'expirations'   => date('Y-m-d H:i:s', strtotime("+7 day")),
                    'user_id'       => $sessionuser[0]->id,
                    'status'        => "Active"
                ]);
            }
            if ($uploadtodatabase) {
                $request->session()->flash('documentuploaded', 'Document Uploaded Successfully');
                return redirect()->back();
            } else {
                $request->session()->flash('documentuploaded', 'Erorr While Uploading');
                return redirect()->back();
            }
        }
    }

    public function imagedelete(Request $request, $id, $url)
    {

        $deleted = DB::table('userdocuments')->where('id', $id)->delete();
        if ($deleted) {
            File::delete('uploads/' . $url);
            return redirect()->back();
        }
        return redirect()->back();
    }


    public function ownupload(Request $request)
    {
        if ($request->hasfile('files')) {
            $sessionuser  = $request->session()->get('RetailerData');
            foreach ($request->file('files') as $file) {
                $name = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $name);
                $data[] = $name;
                $uploadtodatabase = DB::table('privateuserdocuments')->insert([
                    'documenturl'   => $name,
                    'title'         => $file->getClientOriginalName(),
                    'extension'     => $file->getClientOriginalExtension(),
                    'expirations'   => date('Y-m-d H:i:s', strtotime("+7 day")),
                    'user_id'       => $sessionuser[0]->id,
                    'status'        => "Active"
                ]);
            }
            if ($uploadtodatabase) {
                $request->session()->flash('vdocumentuploaded', 'Document Uploaded Successfully');
                return redirect()->back();
            } else {
                $request->session()->flash('vdocumentuploaded', 'Erorr While Uploading');
                return redirect()->back();
            }
        }
    }

    public function imagedeletev(Request $request, $id, $url)
    {

        $deleted = DB::table('privateuserdocuments')->where('id', $id)->delete();
        if ($deleted) {
            File::delete('uploads/' . $url);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function community(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $UserProfile = DB::table('users')->where('email', $sessionuser[0]->email)->get();
        foreach ($UserProfile as $profile) {
            $id = $profile->id;
            $username  = $profile->username;
            $Name = $profile->goodName;
        }
        $chats = DB::table('communitychat')->where('status', 'Active')->get();
        return view('foodbusiness.community', [
            'name' => $Name,
            'chats' => $chats,
            'userID' => $sessionuser[0]->id
        ]);
    }

    public function communitymessage(Request $request)
    {
        $sessionuser  = $request->session()->get('RetailerData');
        $chatstodb = DB::table('communitychat')->insertGetId([
            'message' => $request['message'],
            'date' => date('Y-m-d'),
            'time' => date('H:i:S'),
            'user_id' => $sessionuser[0]->id,
            'status' => 'Active'
        ]);
        
        $chats = DB::table('communitychat')->where('status','Active')->get();
        $message = [];
        foreach ($chats as $chat){
            $message['message'] = $chat->message;
            $message['date'] = $chat->date;
            $message['time'] = $chat->time;
            $message['userID'] = $chat->user_id;
        }
        return $message;
           
        
    }

    public function getmessage(Request $request){
        $chats = DB::table('communitychat')->where('status','Active')->get();
        $sessionuser  = $request->session()->get('RetailerData');
        foreach($chats as $chat){
            if($chat->user_id == $sessionuser[0]->id){
                echo  '<div class="dialog-2">';
            }
            else{
                echo  '<div class="dialog-1">';
            }
          
           echo  '<div class="right-point" >';
            echo   ' <div class="message-l">';
            echo $chat->message;
             echo        '</br>';
               echo     '<small>Hamza Farooq : 10:00pm </small>';
                echo    '<br>';
                 echo   '<small class="deleteMessage">Delete Message</small>';
                echo '</div>';
                echo '</div>';
             echo '</div>';
        }
       
    }
}
