<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    public function dashboardJobForm():View{
        return view("pages.dashboard.jobPage");
    }   

}
