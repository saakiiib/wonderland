<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function adminRegister()
    {
        return view('admin.admin_register');
    }
    public function adminLogin()
    {
        return view('admin.admin_login');
    }
    public function saveAdminUser(Request $request)
    {
        $data['admin_name'] = $request->admin_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = md5($request->password);

        DB::table('admin')->insert($data);
        session()->flash('success', 'Your account has been created successfully.');

        return redirect('/admin-login');
    }
    public function adminLoginCheck(Request $request)
    {
        $email_address = $request->email_address;
        $password = md5($request->password);

        $result = DB::table('admin')
            ->where('email_address', $email_address)
            ->where('password', $password)
            ->first();

        if ($result) {
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
            Session::put('email_address', $result->email_address);
            return redirect('/admin-dashboard');
        } else {
            Session::put('exception', 'Wrong credentials!');
            return redirect('admin-login');
        }
    }
    public function adminDashboard()
    {
        $session_id = Session::get('admin_name');
        if ($session_id) {
            return view('admin.dashboard_content');
        } else {
            return redirect('/admin-login');
        }
    }
    public function adminLogout()
    {
        Session::put('admin_name', '');
        Session::put('admin_id', '');
        Session::put('message', 'You have successfully logged out!');
        return redirect('/admin-login');
    }
    public function adminProfile()
    {
        $admins = DB::table('admin')->get();
        return view('admin.admin_profile', compact('admins'));
    }
}
