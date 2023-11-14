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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $filename = time() . '.' . $request->image->extension();

            $request->image->storeAs('public/home', $filename);

            $data['image'] = $filename;
        }

        DB::table('home_data')->updateOrInsert(['id' => 1], $data);

        return redirect()->route('edit-home')->with('success', 'Home data updated successfully');
    }
}
