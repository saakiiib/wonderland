<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentFeedbackController;


Route::get('/', [FrontEndController::class, 'root']);
Route::post('/', [DashboardController::class, 'storeContactData'])->name('store-contact-data');


Route::get('/about', [FrontEndController::class, 'about']);
Route::get('/teachers', [FrontEndController::class, 'teachers']);
Route::get('/vehicles', [FrontEndController::class, 'vehicles']);
Route::get('/contact-us', [FrontEndController::class, 'contactUs']);
Route::get('/students-feedback', [FrontEndController::class, 'studentsFeedback']);


Route::get('/admin-register', [AdminController::class, 'adminRegister']);
Route::get('/admin-login', [AdminController::class, 'adminLogin']);
Route::post('/save-admin-user', [AdminController::class, 'saveAdminUser']);
Route::post('/admin-login-check', [AdminController::class, 'adminLoginCheck']);
Route::get('/admin-dashboard', [AdminController::class, 'adminDashboard']);
Route::get('/admin-logout', [AdminController::class, 'adminLogout']);
Route::get('/admin-profile', [AdminController::class, 'adminProfile']);


Route::get('/edit-home', [HomeController::class, 'editHome'])->name('edit-home');
Route::post('/edit-home', [HomeController::class, 'updateHome'])->name('update-home');


Route::get('/edit-about', [AboutController::class, 'editAbout'])->name('edit-about');
Route::post('/edit-about', [AboutController::class, 'updateAbout'])->name('update-about');


Route::get('/add-teacher', [TeacherController::class, 'addTeacher']);
Route::post('/store-teacher', [TeacherController::class, 'storeTeacher']);
Route::get('/manage-teachers', [TeacherController::class, 'manageTeachers'])->name('manage-teachers');
Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'editTeacher'])->name('teachers.edit');
Route::put('/teachers/{teacher}', [TeacherController::class, 'updateTeacher'])->name('teachers.update');
Route::delete('/teachers/{teacher}', [TeacherController::class, 'deleteTeacher'])->name('teachers.delete');


Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::post('/store-student', [StudentController::class, 'storeStudent']);
Route::get('/manage-students', [StudentController::class, 'manageStudents'])->name('manage-students');
Route::get('/students/{student}/edit', [StudentController::class, 'editStudent'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'updateStudent'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'deleteStudent'])->name('students.delete');


Route::get('/add-student-feedback', [StudentFeedbackController::class, 'addStudentFeedback']);
Route::post('/store-student-feedback', [StudentFeedbackController::class, 'storeStudentFeedback'])->name('store-student.feedback');
Route::get('/manage-student-feedbacks', [StudentFeedbackController::class, 'manageStudentFeedback'])->name('manage-student.feedbacks');
Route::get('/student-feedbacks/{feedback}/edit', [StudentFeedbackController::class, 'editStudentFeedback'])->name('student-feedbacks.edit');
Route::put('/student-feedbacks/{feedback}', [StudentFeedbackController::class, 'updateStudentFeedback'])->name('student-feedbacks.update');
Route::delete('/student-feedbacks/{feedback}', [StudentFeedbackController::class, 'deleteStudentFeedback'])->name('student-feedbacks.delete');


Route::get('/add-vehicle', [VehicleController::class, 'addVehicle'])->name('add-vehicle');
Route::post('/store-vehicle', [VehicleController::class, 'storeVehicle'])->name('store-vehicle');
Route::get('/manage-vehicles', [VehicleController::class, 'manageVehicles'])->name('manage-vehicles');
Route::get('/edit-vehicle/{id}', [VehicleController::class, 'editVehicle'])->name('edit-vehicle');
Route::put('/update-vehicle/{id}', [VehicleController::class, 'updateVehicle'])->name('update-vehicle');
Route::delete('/delete-vehicle/{id}', [VehicleController::class, 'deleteVehicle'])->name('delete-vehicle');

Route::get('/manage-contacts', [DashboardController::class, 'manageContacts'])->name('manage-contacts');
Route::delete('/delete-contact/{contact}', [DashboardController::class, 'deleteContact'])->name('delete-contact');
