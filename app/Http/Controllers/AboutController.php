<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function editAbout()
    {
        $aboutData = DB::table('about_data')->where('id', 1)->first();

        return view('about.edit_about', compact('aboutData'));
    }

    public function updateAbout(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image| mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $filename = time() . '.' . $request->image->extension();

            $request->image->storeAs('public/about', $filename);

            $data['image'] = $filename;
        }

        DB::table('about_data')->updateOrInsert(['id' => 1], $data);

        return redirect()->route('edit-about')->with('success', 'About data updated successfully');
    }
}
