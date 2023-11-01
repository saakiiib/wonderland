<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function addTeacher(){

            return view('teacher.add_teacher');

    }

    public function manageTeachers(){

        $teachers = DB::table('teachers')->get();

        return view('teacher.manage_teachers', compact('teachers'));

    }

    public function storeTeacher(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'mobile_number' => 'required|string|max:20',
            'class_id' => 'required|integer'
        ]);

        DB::table('teachers')->insert([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile_number' => $validatedData['mobile_number'],
            'class_id' => $validatedData['class_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Teacher added successfully');

    }

    public function editTeacher($teacher) {
        $teacher = DB::table('teachers')->where('id', $teacher)->first();
        return view('teacher.edit_teacher', ['teacher' => $teacher]);
    }

    public function updateTeacher(Request $request, $teacher) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_number' => 'required|numeric',
            'class_id' => 'required|numeric',
        ]);

        DB::table('teachers')->where('id', $teacher)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile_number' => $validatedData['mobile_number'],
            'class_id' => $validatedData['class_id'],
        ]);

        return redirect('/manage-teachers')->with('success', 'Teacher updated successfully');
    }



    public function deleteTeacher($teacher) {

        $teacher = DB::table('teachers')->where('id', $teacher)->first();

        DB::table('teachers')->where('id', $teacher->id)->delete();

        return redirect()->route('manage-teachers')->with('success', 'Teacher deleted successfully');

    }

}
