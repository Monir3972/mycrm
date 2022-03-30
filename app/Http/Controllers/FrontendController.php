<?php

namespace App\Http\Controllers;

use App\Models\AdminPanel;
use App\Models\PageConfig;
use App\Models\GeneralSettings;
use App\Models\Pricing;
use App\Models\massuser;
use App\Models\PackageModule;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function homepage(){
        $details = GeneralSettings::orderBy('id','DESC')->first();
        $layout   = PageConfig::where(['pageName'=>'homepage'])->first();
        if(!empty($layout)):
            if($layout->pageType=="theme1"):
                return view('frontend.basicHome',['details'=>$details,'layout'=>$layout]);
            else:
                return view('frontend.advanceHome',['details'=>$details,'layout'=>$layout]);
            endif;
        else:
            return view('frontend.basicHome',['details'=>$details]);
        endif;
    }

    public function adminLogin(){
        $layout   = PageConfig::where(['pageName'=>'authpage'])->first();
        if(!empty($layout)):
            if($layout->pageType=="Basic"):
                return view('frontend.basicSignin',['layout'=>$layout]);
            else:
                return view('frontend.coverSignin',['layout'=>$layout]);
            endif;
        else:
            return view('frontend.coverSignin');
        endif;
    }


        public function userRegister(Request $request){
         
           $request->validate([
                    'name'=>'required',
                    'email'=>'required|email|unique:massusers',
                    'password'=>'required|min:5|max:12'
            ]);
        $massuser = new massuser;
         $massuser->name = $request->name;
         $massuser->email = $request->email;
         $massuser->mobile = $request->mobile;
         $massuser->country = $request->country;
         $massuser->password = Hash::make($request->password);
         $save = $massuser->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
        }

         public function userLogin(){
            return view('frontend.massuserLogin');
         }
          public function userReg(){
            return view('frontend.massuserReg');
         }
         public function userDashboard(){
         $data = ['LoggedUserInfo'=>massuser::where('id','=', session('LoggedUser'))->first()];
            return view ('frontend.admin.dashboard',$data);
         }

      function userLogout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/user-Login');
        }
    }

        public function confirmLogin(Request $request){
            // return $request->input();
             //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);
        $userInfo = massuser::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect(route('userDashboard'));

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
        }

        function userSetting(){
        $data = ['LoggedUserInfo'=>massuser::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function userProfile(){
        $data = ['LoggedUserInfo'=>massuser::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    function userStaff(){
        $data = ['LoggedUserInfo'=>massuser::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }

    public function pricingOrder($id){
       $pricing = Pricing::find($id);
        return view('frontend.pricringOrder',['pricing'=>$pricing]);
    }
   public function paymentOrder(){
        return view('frontend.paymentOrder');
    }
    public function successPayment(){
        return view('frontend.paymentSuccess');
    }
    public function cancelPayment(){
        return view('frontend.paymentCancell');
    }

    public function loginConfirm(Request $requ){
        $admin = AdminPanel::where(['email'=>$requ->username])->first();
        if(!empty($admin)):
            $hashpass  = $admin->loginPass;
            $sessionid  = $admin->id;
            $authuser = Hash::check($requ->password,$hashpass);
            if($authuser):
                session_start();
                Session::regenerate();
                Session::put('adminAuth',$sessionid);
                Session::get('adminAuth');
                $_SESSION['adminAuth']   = $sessionid;
                return redirect(route('superAdmin'));
            else:
                return redirect(route('adminLogin'))->with('error','Sorry! Wrong password provide');
            endif;
        endif;
    }

    public function signupConfirm(Request $requ){
        $admin = AdminPanel::where(['email'=>$requ->username])->first();
        if(!empty($admin)):
            return back()->with('error','Sorry! Admin account already exist');
        else:
            $admin = new AdminPanel();
            $hashpass  = Hash::make($requ->password);
            $admin->name        = $requ->adminName;
            $admin->email       = $requ->username;
            $admin->loginPass   = $hashpass;
            $admin->plainPass   = $requ->password;
            if($admin->save()):
                return back()->with('success','Congrats! Admin profile created successfully');
            else:
                return back()->with('error','Sorry! Wrong password provide');
            endif;
        endif;
    }

    public function pricing(){
        $pricing =  Pricing::all();
        return view('frontend.pricing',['pricing'=>$pricing]);
    }
}
