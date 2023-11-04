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
        ]);

        DB::table('about_data')->updateOrInsert(
            ['id' => 1],
            [
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]
        );

        return redirect()->route('edit-about')->with('success', 'About data updated successfully');
    }
}
