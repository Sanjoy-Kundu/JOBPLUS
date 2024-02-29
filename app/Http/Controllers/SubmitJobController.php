<?php

namespace App\Http\Controllers;

use App\Models\submitJob;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmitJobController extends Controller
{
  
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

 
    public function customerJobApply(Request $request)
    {   
        try{
            $user_id = Auth::id();
           $job_id = $request->input("job_id");
           submitJob::create([
            "user_id" =>$user_id,
            "job_id" =>$job_id
           ]);
           return response()->json(["status" => "success", "message" => "Application Successfully"]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(submitJob $submitJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(submitJob $submitJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, submitJob $submitJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(submitJob $submitJob)
    {
        //
    }
}
