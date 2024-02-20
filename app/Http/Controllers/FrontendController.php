<?php

namespace App\Http\Controllers;

use App\Models\About;
use Exception;
use Illuminate\Http\Request;
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
}
