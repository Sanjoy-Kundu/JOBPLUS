<?php

namespace App\Http\Controllers;

use App\Models\About;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AboutController extends Controller
{
   
    public function dashboardAbout():View{
        return view("pages.dashboard.aboutPage");
    }


    public function webDashboardAbout(Request $request){
    
        try{
            $request->validate([
                "about_title" => "required",
                "about_description" => "required"
            ]);
        $count = About::all()->count();
        if($count == 0){
            About::create([
                "user_id" => Auth::id(),
                "about_title" => $request->input("about_title"),
                "about_description" => $request->input("about_description")
            ]);
            return response()->json(["status" => "success", "message" => "Message Inserted Successfully"]);
        }
        else{
            return response()->json(["status" => "fail", "message" => "Only You Can Update Your Data."]);
        }
      }
      catch(Exception $ex){
        return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
      }
    }


    public function webDashboardAboutDetails(Request $request){
        try{
            $data = About::where("id","=",1)->first();
            return response()->json(["status" => "success", "data" => $data]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }


    public function dashboardAboutUpdate(Request $request){
        try{
            $id = $request->input("id");
            About::where("id","=",$id)->update([
                "user_id" => Auth::id(),
                "about_title" => $request->input("about_title"),
                "about_description" => $request->input("about_description")
            ]);
            return response()->json(["status" => "success", "message" => "Message Updated Successfully"]);
        }
        catch(Exception $ex){
            return response()->json(["status" => "fail", "message"=> $ex->getMessage()]);
        }
    }
















    public function frontendAboutDetails(){
        try{
            $data = About::where("id","=",1)->first();
            return response()->json(["status" => "success", "data" => $data]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }
}
