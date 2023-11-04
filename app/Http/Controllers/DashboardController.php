<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function editHome()
    {
        $session_id = Session::get('admin_name');

        if ($session_id) {
            return view('home.edit_home');
        } else {
            return redirect('/admin-login');
        }
    }

    public function editAbout()
    {
        $session_id = Session::get('admin_name');

        if ($session_id) {
            return view('about.edit_about');
        } else {
            return redirect('/admin-login');
        }
    }
    public function storeContactData(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        DB::table('contact_us')->insert([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function manageContacts()
    {
        $contacts = DB::table('contact_us')->get();

        return view('contact_us.manage_contact_us', ['contacts' => $contacts]);
    }

    public function deleteContact($contact)
    {
        $contact = DB::table('contact_us')->where('id', $contact)->first();

        if ($contact) {
            DB::table('contact_us')->where('id', $contact->id)->delete();
            return back()->with('success', 'Contact deleted successfully');
        } else {
            return back()->with('error', 'Contact not found');
        }
    }
}
