<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addStudent()
    {

        return view('student.add_student');
    }

    public function manageStudents()
    {

        $students = DB::table('students')->get();

        return view('student.manage_students', compact('students'));
    }

    public function storeStudent(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'mobile_number' => 'required|string|max:20',
            'class_id' => 'required|integer'
        ]);

        DB::table('students')->insert([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile_number' => $validatedData['mobile_number'],
            'class_id' => $validatedData['class_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Student added successfully');
    }


    public function editStudent($student)
    {
        $student = DB::table('students')->where('id', $student)->first();
        return view('student.edit_student', ['student' => $student]);
    }

    public function updateStudent(Request $request, $student)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_number' => 'required|numeric',
            'class_id' => 'required|numeric',
        ]);

        DB::table('students')->where('id', $student)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile_number' => $validatedData['mobile_number'],
            'class_id' => $validatedData['class_id'],
        ]);

        return redirect('/manage-students')->with('success', 'Student updated successfully');
    }

    public function deleteStudent($student)
    {

        $student = DB::table('students')->where('id', $student)->first();

        DB::table('students')->where('id', $student->id)->delete();

        return redirect()->route('manage-students')->with('success', 'Student deleted successfully');
    }
}
