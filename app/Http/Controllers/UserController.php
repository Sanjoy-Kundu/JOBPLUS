<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{

    public function jobplusRegistration():View{
        return view('pages.users.registrationPage');
    }

    public function jobplusRegistrationCompanies():View{
        return view('pages.users.registrationCompaniesPage');
    }

    // registraion (candidate + companies)
    public function userRegistration(Request $request){
        try{
            // $request->validate([
            //     "name" => "required",
            //     "email" => "requuired|max:30|unique:users,email",
            //     "password" => "required|min:4",
            // ],[
            //     "name.required" => "Name field is required",
            //     "email.required" => "Email is required",
            //     "email.unique"  => "Email already taken",
            //     "password.required" => "Password is required",
            //     "password.min"  => "Password minimun 4 character or more",
            // ]);
            if($request->input("role")){
                User::create([
                    "name" => Str::upper($request->input("name")),
                    "email" => Str::lower($request->input("email")),
                    "password" => Hash::make($request->input("password")),
                    "role" =>Str::lower($request->input("role"))
                ]);
                return response()->json(["status" => "success", "message" => "User Registrain Successfully"]);
            }else{
                User::create([
                    "name" => Str::upper($request->input("name")),
                    "email" => Str::lower($request->input("email")),
                    "password" => Hash::make($request->input("password")),
                ]);
                return response()->json(["status" => "success", "message" => "User Registrain Successfully"]);
            }
    
        
            
        }catch(Exception $ex){
            return response()->json(["status" => "fail", $ex->getMessage()]);
        }
    }



    public function jobpulseLogin():View{
        return view('pages.users.loginPage');
    }

    public function jobpulseLoginAdmin():View{
        return view('pages.users.loginPage');
    }

    // both login (owner + companies + candidate)
    public function userLogin(Request $request){
        try{
            $request->validate([
                'email' => 'required|string|email|max:50',
                'password' => 'required|string|min:4'
            ]);
            $user = User::where("email", Str::lower($request->input("email")) )->first();
            if(!$user || !Hash::check($request->input("password"), $user->password)){
                return response()->json(["status" => "fail", "message" => "Invalid User"]);
            }
            $token = $user->createToken('authToken')->plainTextToken;


            return response()->json(["status" => "success", "message" => "Login Successfully", "token" => $token]);

        }catch(Exception $ex){
            return response()->json(["status" => "fail", $ex->getMessage()]);
        }
    }    



    public function jobpulsForgetPassword():View{
        return view('pages.users.forgetPasswordPage');
    }
    
    public function sendOtpForForgetPassword(Request $request){
        try{
        // $request->validate([
        //     "email" => "required"
        // ],[
        //     "email.required" => "Please Enter Your Email"
        // ]);
        $randomOtp = rand(1000,9999);
        $email = Str::lower($request->input("email"));
        $countEmail = User::where("email","=",$email)->count();

        if($countEmail){
            //return "milse";
            Mail::to($email)->send(new OtpMail($randomOtp));
            User::where("email","=",$email)->update(["otp" =>$randomOtp]);
            return response()->json(["status" => "success", "message" => "Your code has been send successfully"]);
        }else{
            return response()->json(["status" => "fail", "message" => "Invalid Email"]);
        }

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }


    public function otp():View{
        return view("pages.users.otpPage");
    }
    
    public function verifyotpforgetPassword(Request $request){
        try{
            $request->validate([
                "email" => "required",
                "otp"  => "required"
            ]);
            $email = $request->input("email");
            $otp = $request->input("otp");
            $count = User::where("email","=",$email)->where("otp","=",$otp)->first();
            if(!$count){
                return response()->json(["status" => "fail", "message" => "Invalid Otp"]);
            }else{
                User::where("email","=",$email)->update(["otp" => "0"]);
                $token = $count->createToken('authToken')->plainTextToken;
                return response()->json(["status" => "success", "message" => "Your Otp VerifySuccessfully", "token" => $token]);
            }

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }



    //reset password start
    public function resetPasswordFrom():View{
        return view("pages.users.resetPasswordOtpFormPage");
    }

    public function forgetResetPasswordOtp(Request $request){
        try{
            $request->validate([
                "password" => "required"
            ]);
            $id = Auth::id();
            $newPassword = $request->input("password");
            User::where("id","=",$id)->update(["password" => Hash::make($newPassword)]);
            return response()->json(["status" => "success", "message" => "User Password Updated Successfully"]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }
   //reset password start






// ::::::::::: DASHBOARD START ::::::::::::::::::::
  public function dashboard():View{
    return view("pages.dashboard.dashboardPage");
  }


  public function dashboardProfile():View{
    return view("pages.dashboard.profilePage");
  }

  public function userProfile(){
    try{
        $userId = Auth::id();
        $user = User::where("id",$userId)->first();
        return response()->json(["status" => "success", "data" => $user]);
    }catch(Exception $ex){
        return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
    }
}


public function userProfileUpdate(Request $request){
    try{
        $email = $request->input("email");
        $userId = Auth::id();
        User::where("id",$userId)->where("email",$email)->update([
         "name" => Str::upper($request->input("name")),
        ]);
        return response()->json(["status" => "success", "message" => "User Profile Updated Successfully"]);
    }catch(Exception $ex){
        return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
    }

}



public function userPasswordReset(Request $request){
  try{
    $userId = Auth::id();
    $newPassword = $request->input("password");
    User::where("id",$userId)->update([
        "password" => Hash::make($newPassword)
    ]);
    return response()->json(["status" => "success", "message" => "User Password Updated Successfully"]);
  }catch(Exception $ex){
    return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
  }
}























    

  



   
}
