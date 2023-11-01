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

}

