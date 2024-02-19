<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function index():View{
        return view("pages.frontend.homePage");
    }

    public function about():View{
        return view("pages.frontend.aboutPage");
    }
}
