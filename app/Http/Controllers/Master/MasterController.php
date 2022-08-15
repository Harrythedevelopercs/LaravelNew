<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UpdateProfileVerification;
use Illuminate\Http\UploadedFile;

class MasterController extends Controller
{
    function dashboard(){

        $userdb = DB::select('select * from users');
        $kicthen = DB::select('select * from kitchens');
        $usercount = DB::table('users')->count();
        $kitcount = DB::table('kitchens')->count();
        if(empty($userdb)){
            $userdb = "No Data Found";
        }
        return view('Master.dashboard' , [
            'userdata' => $userdb,
            'kitchen' => $kicthen,
            'usercount' => $usercount,
            'kitcount' => $kitcount,
            
        ]);

    }
    function login(){
        return view('Master.login');
    }
    function logout(Request $request){
        if($request->session()->exists('MasterData')){
            $request->session()->pull('MasterData');
            $request->session()->flush();
        }
        return redirect('/Master');
    }

    function loginProcess(Request $request){

        $username = $request['username'];
        $password = $request['password'];
        $master = DB::select('select * from master where username = ? and password = ?',[$username,$password]);
        if(!empty($master)){
            $request->session()->put('MasterData',$master);
            return redirect('/Master/dashboard');
        }
        else{
            $request->session()->flash('masterlogin','username and password incorrect');
            return redirect('/Master');
        }
    }

    function users(Request $request){
        $users = DB::table('users')->count();
        $userdb = DB::select('select * from users');
        return view('Master.users',[
            'ownerCount'=> $users,
            'userslist' => $userdb,
        ]);
    }


    function adduser(Request $request){
        $users = DB::table('users')->count();
        return view('Master.addusers',[
            'ownerCount'=> $users
        ]);
    }


     function adduserprocessSk(Request $request){



        $username = $request->input('username');
        $checkusername = DB::table('users')->where('username',$username)->count();
        if($checkusername >= 1){
            $request->session()->flash('useraddcheck-sk','Username Found Please Create Unique Username');
            return redirect('/Master/user/add');
        }
       
        $email = $request->input('email');
        $checkemail = DB::table('users')->where('email',$email)->count();
        if($checkemail >= 1){
            $request->session()->flash('useraddcheck-sk','Email Found Please Enter Unique Email');
            return redirect('/Master/user/add');
        }



        $newuser = DB::table('users')->insertGetId([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'), 
            'goodName' => $request->input('fullname'),
            'WorkEmail' => $request->input('workemail'),
            'Status'=> 'Active',
            'joiningDate' => date('d-m-Y'),
            'role' => 'retailer',
            'salt' => Hash::make($username.":". $email)

        ]);

        if($newuser){
            $request->session()->flash('successmessageSK','User Has Been Added');
            return redirect('/Master/user/add');
        }

    }


    function userprofile($id){
        $userprofile = DB::select('select * from users where id = ?',[$id]);
         $kitchenProfile = DB::select('SELECT * FROM assignkitchen , kitchens WHERE assignkitchen.kitchenId = kitchens.id and assignkitchen.userID =? ',[$id]);

        foreach($userprofile as $profile){
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
        
        return view('Master.retailerprofile',[
            'id'=> $id,
            'username'  =>  $username,
            'password'  =>  $password,
            'email'     =>  $email,
            'workEmail' =>  $workemail,
            'joinD'     =>  $joiningDate,
            'name'      =>  $Name,
            'role'      =>  $role,
            'status'    =>  $status,
            'kitchens' => $kitchenProfile
        ]);
    }


    function deactivate($id){
        DB::table('users')
              ->where('username', $id)
              ->update(['status' => 'Deactivate']);

        return redirect(url()->previous());
    }

    function activate($id){
        DB::table('users')
              ->where('username', $id)
              ->update(['status' => 'Active']);

        return redirect(url()->previous());
    }

    function profileUpdate(Request $request){
        $workEmail = $request->input('workemail');
        $username = $request->input('usernamehide');
        $updatedname = $request->input('fullname');
        $Name =  DB::table('users')->select('goodName','password')->where('username',$username)->get();

        $checkemail = DB::table('users')->where('workEmail',$workEmail)->count();
        

        if($checkemail < 1 ){

            if($request->input('password') == ""){
                $updatedname = $request->input('fullname');
                $password = $Name[0]->password;
                $workEmail = $request->input('workemail');

                if($workEmail == ""){
                    $affected = DB::table('users')
                    ->where('username', $username)
                    ->update(['goodName' => $updatedname,'password'=>$password]);
                  if($affected == 1){
                      $request->session()->flash('MailMessage','User Has Been Updated');
                      return redirect(url()->previous());
                  }
                }
                else{
                    $affected = DB::table('users')
                    ->where('username', $username)
                    ->update(['goodName' => $updatedname,'password'=>$password,'workEmail' => $workEmail]);
                  if($affected == 1){
                      $request->session()->flash('MailMessage','User Has Been Updated');
                      return redirect(url()->previous());
                  }
                }
               
            }
            else{
                $password = Hash::make($request->input('password'));
                $workEmail = $request->input('workemail');
                if($workEmail == ""){
                    $affected = DB::table('users')
                    ->where('username', $username)
                    ->update(['goodName' => $updatedname,'password'=>$password]);
                  if($affected == 1){
                      $request->session()->flash('MailMessage','User Has Been Updated');
                      return redirect(url()->previous());
                  }
                }
                else{
                    $affected = DB::table('users')
                    ->where('username', $username)
                    ->update(['goodName' => $updatedname,'password'=>$password,'workEmail' => $workEmail]);
                  if($affected == 1){
                      $request->session()->flash('MailMessage','User Has Been Updated');
                      return redirect(url()->previous());
                  }
                }
            }
    
        }
        else{
            $request->session()->flash('WorkEmail','Working Email Found Please Enter Unique Email');
            return redirect(url()->previous());
        }

        


        Mail::to('hamza.khan@crystal-lite.net')
        ->send(new UpdateProfileVerification($username));
        return redirect(url()->previous());
    }

    function kitchenadd(){
        $users = DB::table('kitchens')->count();
        $kitchens = DB::table('kitchens')->get();
        return view('Master.addkitchen',[
            'ownerCount'=> $users,
            'kitchens' => $kitchens,
        ]);
    }

    function processaddkitchen(Request $request){
         $title = $request->input('kitchenname');
         $website = $request->input('websiteurl');
         $description = $request->input('Description');
         $kitchenType = $request->input('kitchenType');
         $Renters = $request->input('Renters');
         $zipcode = $request->input('zipcode');
         $kitaddress = $request->input('kitaddress');
         $longitude = $request->input('longitude');
         $latitude = $request->input('latitude');
        
        $logo = $request->file('logo')->getClientOriginalName();
        $extension = $request->file('logo')->extension();
        if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'){
        $save = time()."_".$logo;
        $request->file('logo')->move(public_path('uploads'),$save);

         $newkit = DB::table('kitchens')->insertGetId([
            'name' => $title,
            'kitchenLogo' => $save,
            'website' => ($website) ? $website : "none", 
            'description' => $description,
            'kitchenType' => $kitchenType,
            'renters'=> $Renters,
            'streetAddress' => $kitaddress,
            'zipCode' => $zipcode,
            'lat_long' => $longitude.','.$latitude,
            'created_date' => date('Y-m-d'),
            'status' => 'Active'
        ]);
        if($newkit){
            echo "Kitchen Has Been Added";
        }
        else{ 
            echo "Getting Errors";
        }
          }  
          else{
            echo "Only Images Allowed";
          }
        
    }


    public function kitchenprofile($kitchenid){
       $kitchens = DB::table('kitchens')->where('id',$kitchenid)->get();
       $kitchenEquipments = DB::table('kitchenfeatures')->where('kitid',$kitchenid)->get();
       $additonalservices = DB::table('additonalservices')->where('kitid',$kitchenid)->get();
       $kitchenequipmentsadd = DB::table('kitchenequipments')->where('kitid',$kitchenid)->get();
       $businessstagesform = DB::table('businessstagesform')->where('kitid',$kitchenid)->get();
       $acceptedbusinesstypes = DB::table('acceptedbusinesstypes')->where('kitid',$kitchenid)->get();
       $leasetypesprovided = DB::table('leasetypesprovided')->where('kitid',$kitchenid)->get();
       $kitchenimages = DB::table('kitchenimages')->where('kitid',$kitchenid)->get();
       
       


       foreach($kitchens as $kicthen){
        $id = $kicthen->id;
         $name = $kicthen->name;
         $logo = $kicthen->kitchenLogo;
         $website = $kicthen->website;
         $description = $kicthen->description;
         $kitchenType = $kicthen->kitchenType;
         $renters     = $kicthen->renters;
         $streetAddress     = $kicthen->streetAddress;
         $zipCode = $kicthen->zipCode;
         $map = $kicthen->lat_long;
         $created_date = $kicthen->created_date;
         $status = $kicthen->status;
       }
        $equip = [];
       foreach($kitchenEquipments as $equipment){
         $equip = json_decode($equipment->Equipements);
       }
       $additional = [];
       foreach($additonalservices as $additonal){
         $additional = json_decode($additonal->Equipements);
       }
       $equipments = [];
       foreach($kitchenequipmentsadd as $kitchenequipmentsadds){
         $equipments = json_decode($kitchenequipmentsadds->Equipements);
       }
       $businessstages = [];
       foreach($businessstagesform as $businessstagesfor){
         $businessstages = json_decode($businessstagesfor->Equipements);
       }
       $acceptedbusinesstype = [];
       foreach($acceptedbusinesstypes as $acceptedbusinesstypess){
         $acceptedbusinesstype = json_decode($acceptedbusinesstypess->Equipements);
       }
       $leasetypesprovidedarray = [];
       foreach($leasetypesprovided as $leasetypesprovideds){
         $leasetypesprovidedarray = json_decode($leasetypesprovideds->Equipements);
       }
       $images = [];
       foreach($kitchenimages as $image){
         $images = json_decode($image->images);
       }

    //    if(in_array("2",$equip) ){
    //      return "find";
    //    }
    //    else{
    //     return "not-find";
    //    }

       return view('Master.kitchenprofile',[
        'id'=> $id ,
        'name'  =>  $name,
        'logo'  =>  $logo,
        'website'     =>  $website,
        'description' =>  $description,
        'type'     =>  $kitchenType,
        'renter'      =>  $renters,
        'address'      =>  $streetAddress,
        'zipcode'    =>  $zipCode,
        'map' => 'https://www.google.com/maps/@'.$map.',13z',
        'create_date' => $created_date,
        'status' => $status,
        'equip' => $equip,
        'additional'=>$additional,
        'additionall'=> $equipments,
        'businessstages'=>$businessstages,
        'acceptedbusinesstypes' => $acceptedbusinesstype,
        'leasetypesprovided' => $leasetypesprovidedarray,
        'images'=>$images,
        ]);
    }


    public function findkit(Request $request){
        $value =  $request['stringval'];
        $kitchens = DB::select('select * from kitchens   where name like "%'.$value.'%" AND status = "Active" ');
        if(sizeof($kitchens) == 0){
            return "No Kitchen Found";
        }
        else{
            foreach($kitchens as $kitname){
                $renderdata = '<div class="form-check">
                <input class="form-check-input" type="checkbox" value="'.$kitname->id.'" id="flexCheckDefault-'.$kitname->id.'">
                <label class="form-check-label" for="flexCheckDefault">
                '.$kitname->name.'
                </label>
              </div>
              <script>
              $("#flexCheckDefault-'.$kitname->id.'").change(function(){
                   $.ajax({
                    type:"get",
                    url:"/Master/attach/kitchen/",
                    data:{
                        "value": '.$kitname->id.',
                        "userID": $("#userid").val(),
                    },
                    success: function(data){
                        if(data == 0){
                            window.location.reload();
                        }
                        else{
                            alert("Error While Updating Records");
                        }
                    }
                   })
              })
              </script>
              ';
                return $renderdata;
            }
        }
        
    }

    public function attachkit(Request $request){
        $kitid = $request['value'];
        $userid = $request['userID'];

        $newkit = DB::table('assignkitchen')->insertGetId([
            'userID' => $userid,
            'kitchenId' => $kitid, 
            'assignDate' => date('Y-m-d'),
            'status' => 'Active'
        ]);

        if($newkit){
            $update = DB::table('kitchens')
            ->where('id', $kitid)
            ->update(['status' => 'attached']);
            if ($update){
                return 0;    
            }
            
        }
        else{
            return 1;
        }

    }

    public function equipments(Request $request){
        
         $find = DB::table('kitchenfeatures')->where('kitid', $request['kitid'])->get();
        if(sizeof($find) == 0){
            $upateddata = DB::table('kitchenfeatures')
            ->insert(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
        else{
            
            
           
            $upateddata = DB::table('kitchenfeatures')
            ->where('kitid' , $request['kitid'])
            ->update(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
    }


    public function additional(Request $request){
        $find = DB::table('additonalservices')->where('kitid', $request['kitid'])->get();
        if(sizeof($find) == 0){
            $upateddata = DB::table('additonalservices')
            ->insert(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
        else{
            
            
           
            $upateddata = DB::table('additonalservices')
            ->where('kitid' , $request['kitid'])
            ->update(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
    }


    public function equipmentadd(Request $request){
        $find = DB::table('kitchenequipments')->where('kitid', $request['kitid'])->get();
        if(sizeof($find) == 0){
            $upateddata = DB::table('kitchenequipments')
            ->insert(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
        else{
            
            
           
            $upateddata = DB::table('kitchenequipments')
            ->where('kitid' , $request['kitid'])
            ->update(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
    }


    public function requirements(Request $request){
        $find = DB::table('businessstagesform')->where('kitid', $request['kitid'])->get();
        if(sizeof($find) == 0){
            $upateddata = DB::table('businessstagesform')
            ->insert(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
        else{
            $upateddata = DB::table('businessstagesform')
            ->where('kitid' , $request['kitid'])
            ->update(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
    }


    public function business(Request $request){
        $find = DB::table('acceptedbusinesstypes')->where('kitid', $request['kitid'])->get();
        if(sizeof($find) == 0){
            $upateddata = DB::table('acceptedbusinesstypes')
            ->insert(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
        else{
            $upateddata = DB::table('acceptedbusinesstypes')
            ->where('kitid' , $request['kitid'])
            ->update(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
    }

    public function lease(Request $request){
        $find = DB::table('leasetypesprovided')->where('kitid', $request['kitid'])->get();
        if(sizeof($find) == 0){
            $upateddata = DB::table('leasetypesprovided')
            ->insert(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
        else{
            $upateddata = DB::table('leasetypesprovided')
            ->where('kitid' , $request['kitid'])
            ->update(['kitid' => $request['kitid'], 'Equipements' => json_encode($request['data']) , 'status'=> 'Active']);
    
            if($upateddata == 1){
                return "Equipments Added";
            }
            else{
                return "Error While Adding";
            }
        }
    }


    public function kitchenimages($id){
       $kitchens = DB::table('kitchens')->select('id')->where('id',$id)->get();
        $kitchensImages = DB::table('kitchenimages')->where('kitid',$id)->get();
        $arraycount = 0 ;
        foreach($kitchensImages as $kitchenImage){
            $arraycount = count(json_decode($kitchenImage->images));    
        }
        $imagearray = array();
       
        for($a=0 ; $a<$arraycount ; $a++){
              array_push($imagearray,json_decode($kitchenImage->images)[$a]);
        }
         $imagearray;
       $id =  json_decode($kitchens)[0]->id;
       return view('Master.imageupload',[
        'kitid' => $id,
        'images'=> ($imagearray) ? $imagearray : [""],
       ]);
    }


    public function imupload(Request $request){
        $id = $request->input('kitchenid');
        $kitchensImages = DB::table('kitchenimages')->where('kitid',$id)->count();
        $imagesarray = [];
        if($kitchensImages == 0){
            foreach ($request->file('files') as $imagefile) {
                $filename = $imagefile->getClientOriginalName();
                $extension = $imagefile->getClientOriginalExtension();
                $save = time()."_".$filename;
                $imagefile->move(public_path('uploads'),$save);
                array_push($imagesarray,$save); 
            }

            $newkit = DB::table('kitchenimages')->insert([
                'kitid' => $request->input('kitchenid'),
                'images' => json_encode($imagesarray),
                'status'=>'Active',
            ]);
            if($newkit == 1){
                return "Images Uploaded";
            }
            else{
                return $newkit;
            }
        }else{
            $kitchensImagesupdate = DB::table('kitchenimages')->select('images')->where('kitid',$id)->get();
            $r = json_decode($kitchensImagesupdate[0]->images);
           
            foreach ($request->file('files') as $imagefile) {
                $filename = $imagefile->getClientOriginalName();
                $extension = $imagefile->getClientOriginalExtension();
                $save = time()."_".$filename;
                 $imagefile->move(public_path('uploads'),$save);
                array_push($r,$save);
            }
            $newkit = DB::table('kitchenimages')->update([
                'kitid' => $request->input('kitchenid'),
                'images' => json_encode($r),
                'status'=>'Active',
            ]);
            if($newkit == 1){
                return "Images Uploaded";
            }
            else{
                return $newkit;
            }

        }
        
        
        
    }
    


    public function imdelete(){
       
    }
}
