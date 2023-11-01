<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller{

    public function editHome(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.edit_home');
        }

        else{
            return redirect('/admin-login');
        }
    }
    public function editAbout(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.edit_about');
        }

        else{
            return redirect('/admin-login');
        }
    }

    public function addStudent(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.add_student');
        }

        else{
            return redirect('/admin-login');
        }
    }
    public function manageStudents(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.manage_students');
        }

        else{
            return redirect('/admin-login');
        }
    }

    public function addVehicle(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.add_vehicle');
        }

        else{
            return redirect('/admin-login');
        }
    }
    public function manageVehicles(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.manage_vehicles');
        }

        else{
            return redirect('/admin-login');
        }
    }
    public function addFeedback(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.add_feedback');
        }

        else{
            return redirect('/admin-login');
        }
    }
    public function manageFeedbacks(){
        $session_id = Session::get('admin_name');

        if($session_id){
            return view('dashboard.manage_feedbacks');
        }

        else{
            return redirect('/admin-login');
        }
    }

}

