<?php

namespace App\Http\Controllers;

use App\Models\{Teacher, Student};
use App\Http\Requests\StoreTeacherRequest;

class TeacherController extends Controller
{
    public function index(){
        $student = Student::select('teacher_id')->get();
        return view('teacher',[
            'teachers' => Teacher::latest()->get(),
            'highestAllottedStudentsTo' =>  $student->max()->teacher->name,
            'lowestAllottedStudentsTo' =>  $student->min()->teacher->name,
        ]);
    }

    public function create(){
        return view('add_teacher');
    }

    public function store(StoreTeacherRequest $request){
        Teacher::create($request->validated());
        return redirect()->route('teachers.index');
    }

    public function show($id){
        return view('view_teacher',[
            'teacher' => Teacher::find($id)
        ]);
    }

    public function edit($id){
        return view('edit_teacher',[
            'teacher' => Teacher::find($id)
        ]);
    }

    public function update(StoreTeacherRequest $request, $id){
        Teacher::where('id',$id)->update($request->validated());
        return redirect()->route('teachers.index');
    }

    public function destroy($id){
        Teacher::where('id',$id)->delete();
        return back();
    }
}