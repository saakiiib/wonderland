<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function editHome()
    {
        $homeData = DB::table('home_data')->where('id', 1)->first();

        return view('home.edit_home', compact('homeData'));
    }

    public function updateHome(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        //home
        // $filename = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('home'), $filename);
        //home

        //storage 
        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/home', $filename);
        //storage

        DB::table('home_data')->updateOrInsert(['id' => 1], $data);

        return redirect()->route('edit-home')->with('success', 'Home data updated successfully');
    }
}
