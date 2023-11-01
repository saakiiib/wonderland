<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentFeedbackController extends Controller
{
    public function manageStudentFeedback() {
        $feedback = DB::table('student_feedbacks')->get();
        return view('feedback.manage_student_feedbacks', compact('feedback'));
    }

    public function addStudentFeedback() {
        return view('feedback.add_student_feedback');
    }

    public function storeStudentFeedback(Request $request) {
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'feedback_description' => 'required|string',
        ]);

        DB::table('student_feedbacks')->insert([
            'student_name' => $validatedData['student_name'],
            'feedback_description' => $validatedData['feedback_description'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Student Feedback added successfully');
    }

    public function editStudentFeedback($feedback) {
        $feedback = DB::table('student_feedbacks')->where('id', $feedback)->first();
        return view('feedback.edit_student_feedback', ['feedback' => $feedback]);
    }

    public function updateStudentFeedback(Request $request, $feedback) {
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'feedback_description' => 'required|string',
        ]);

        DB::table('student_feedbacks')->where('id', $feedback)->update([
            'student_name' => $validatedData['student_name'],
            'feedback_description' => $validatedData['feedback_description'],
        ]);

        return redirect()->route('manage-student-feedbacks')->with('success', 'Student Feedback updated successfully');
    }

    public function deleteStudentFeedback($feedback) {
        $feedback = DB::table('student_feedbacks')->where('id', $feedback)->first();
        DB::table('student_feedbacks')->where('id', $feedback->id)->delete();

        return redirect()->route('manage-student-feedbacks')->with('success', 'Student Feedback deleted successfully');
    }
}
