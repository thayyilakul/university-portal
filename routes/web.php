<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Teachers
// Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers');
// Route::get('/add-teacher', [App\Http\Controllers\TeacherController::class, 'create'])->name('add-teacher');
// Route::post('/store-teacher', [App\Http\Controllers\TeacherController::class, 'store'])->name('store-teacher');
// Route::get('/edit-teacher/{id}', [App\Http\Controllers\TeacherController::class, 'edit'])->name('edit-teacher');
// Route::patch('/update-teacher/{id}', [App\Http\Controllers\TeacherController::class, 'update'])->name('update-teacher');
// Route::delete('/delete-teacher/{id}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('delete-teacher');

//Students
// Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students');
// Route::get('/add-student', [App\Http\Controllers\StudentController::class, 'create'])->name('add-student');
// Route::get('/edit-student', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit-student');

Route::resource('teachers',TeacherController::class);
// Route::patch('/update-teacher', [TeacherController::class, 'updateTeacher'])->name('update-teacher');
// Route::patch('/test', [TeacherController::class, 'test'])->name('test');
Route::resource('students',StudentController::class);