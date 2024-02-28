<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function index():View{
        return view("pages.frontend.homePage");
    }

    // public function about():View{
    //     $information = About::all();
    //     return view("pages.frontend.aboutPage", compact(["aboutDetails"=>$information]));
    // }

    public function about():View{
        return view("pages.frontend.aboutPage");
        
    }


    public function viewJob():View{
        return view("pages.frontend.viewJob");
    }
    

    public function jobPage():View{
        return view("pages.frontend.jobPage");
    }


    public function contactUs():View{
        return view("pages.frontend.contactPage");
    }


    public function allJobShow(){ 
        try{
            $sixjobs = Job::all()->where("adminAccess","=","0")->take(6);
            $alljobs = Job::all()->where("adminAccess","=","0");
            return response()->json(["status" => "success", "sixjobs" =>$sixjobs, "allJobs" =>$alljobs]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
        
    }


    public function customerAuthCheck(){
        try{
            $auth  = Auth::id();

            if($auth){
                return response()->json(["status" => "success", "message"=>"success"]);
            }else{
                $fail = 0;
                return response()->json(["status" => "fail", "message"=>$fail]);
            }
            // if(!$auth){
            //     $fail = 0;
            //     return response()->json(["status" => "fail", "authFail"=>$fail]);
            // }

        }catch(Exception $ex){

        }
    }


}
