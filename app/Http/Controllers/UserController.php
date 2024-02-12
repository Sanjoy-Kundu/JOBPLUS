<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

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





    public function userProfile(){
        try{
            $userId = Auth::id();
            $user = User::where("id",$userId)->first();
            return response()->json(["status" => "success", "data" => $user]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }
}
