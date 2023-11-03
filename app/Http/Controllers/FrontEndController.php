<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function root()
    {
        return view('front_end.home');
    }

    public function about()
    {
        return view('front_end.about');
    }
    public function teachers()
    {
        return view('front_end.teachers');
    }
    public function vehicles()
    {
        return view('front_end.vehicles');
    }
    public function contactUs()
    {
        return view('front_end.contact_us');
    }
    public function studentsFeedback()
    {
        return view('front_end.students_feedback');
    }
}
