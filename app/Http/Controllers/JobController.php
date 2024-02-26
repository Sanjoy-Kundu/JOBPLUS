<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class JobController extends Controller
{
    public function dashboardJobForm():View{
        return view("pages.dashboard.jobPage");
    }   


    public function dashboardJob(Request $request){
        try{
            $userId = Auth::id();
            Job::create([
                "user_id" => $userId,
                "companyName" => $request->input("companyName"),
                "jobTitle" => $request->input("jobTitle"),
                "minumumSalary" => $request->input("minumumSalary"),
                "jobLocation" => $request->input("jobLocation"),
                "jobExperience" => $request->input("jobExperience"),
                "jobAdditionalRequirement" => $request->input("jobAdditionalRequirement"),
                "jobPublishDate" => $request->input("jobPublishDate"),
                "jobSkill" => $request->input("jobSkill"),
                "jobCompnayOtherBenifits" => $request->input("jobCompnayOtherBenifits"),
                "jobEmployeeStatus" => $request->input("jobEmployeeStatus"),
            ]);

            return response()->json(["status" => "success", "message" => "Job Inserted Successfully"]);

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }



    public function dashboardJoblistPage():View{
        return view("pages.dashboard.joblistPage");
    }   




    public function dashboardJobList(Request $request){
        //return "This is dahboard list";
        
        try{
            $user_id = Auth::id();
            $joblist = Job::where("user_id","=",$user_id)->get();
            return response()->json(["status" => "success", "joblists"=>$joblist]);

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }



    public function dashboardJobDelete(Request $request){
        try{
            $user_id=Auth::id();
            Job::where('id','=',$request->input('id'))->where('user_id','=',$user_id)->delete();
            return response()->json(['status' => 'success', 'message' => "Delete Successful"]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }


    public function dashboardViewJob(Request $request){
        try{
            $jobId = $request->input("id");
            $user_id = Auth::id();
            $result = Job::where("user_id","=",$user_id)->where("id","=",$jobId)->first();
            return response()->json(["status" => "success", "data" => $result]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }



    public function dashboardJobUpdate(Request $request){
        try{
        $id = $request->input("id");
        $user_id = Auth::id();
        $companyName = $request->input("companyName");
        $jobTitle = $request->input("jobTitle");
        $minumumSalary = $request->input("minumumSalary");
        $jobLocation = $request->input("jobLocation");
        $jobExperience = $request->input("jobExperience");
        $jobAdditionalRequirement = $request->input("jobAdditionalRequirement");
        $jobPublishDate = $request->input("jobPublishDate");
        $jobSkill = $request->input("jobSkill");
        $jobCompnayOtherBenifits = $request->input("jobCompnayOtherBenifits");
        $jobEmployeeStatus = $request->input("jobEmployeeStatus");

        Job::where("id","=",$id)->where("user_id","=",$user_id)->update([
            "companyName" => $companyName,
            "jobTitle" => $jobTitle,
            "minumumSalary" => $minumumSalary,
            "jobLocation" => $jobLocation,
            "jobExperience" => $jobExperience,
            "jobAdditionalRequirement" => $jobAdditionalRequirement,
            "jobPublishDate" => $jobPublishDate,
            "jobSkill" => $jobSkill,
            "jobCompnayOtherBenifits" => $jobCompnayOtherBenifits,
            "jobEmployeeStatus" => $jobEmployeeStatus,
        ]);
        return response()->json(["status" => "success", "message" => "Job Update Successfully"]);
        }
        catch(Exception $ex){
            return response()->json(["status" => "fail", "message"=>$ex->getMessage()]);
        }
    }

}
