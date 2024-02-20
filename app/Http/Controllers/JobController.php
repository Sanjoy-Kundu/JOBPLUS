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

}
