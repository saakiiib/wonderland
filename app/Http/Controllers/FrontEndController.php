<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function root()
    {
        $homeData = DB::table('home_data')->where('id', 1)->first();
        $aboutData = DB::table('about_data')->where('id', 1)->first();
        $teachers = DB::table('teachers')->get();
        $vehicles = DB::table('vehicles')->get();
        $feedbacks = DB::table('student_feedbacks')->get();

        return view('front_end.home', compact('homeData', 'aboutData', 'teachers', 'vehicles', 'feedbacks'));
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
