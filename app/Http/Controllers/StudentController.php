<?php

namespace App\Http\Controllers;

use App\Models\{Student, Teacher};
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index(){
        $classesAssigned = Student::select('class',\DB::raw('count(*) as total'))->groupBy('class')->orderBy('total','desc')->get();
        return view('student',[
            'students' => Student::latest()->with('teacher')->get(),
            'classesAssigned' => $classesAssigned,
        ]);
    }

    public function create(){
        return view('add_student',[
            'teachers' => Teacher::latest()->pluck('id','name')
        ]);
    }

    public function store(StoreStudentRequest $request){
        Student::create($request->validated());
        return redirect()->route('students.index');
    }

    public function show($id){
        return view('view_student',[
            'student' => Student::find($id)
        ]);
    }

    public function edit($id){
        return view('edit_student',[
            'student' => Student::find($id),
            'teachers' => Teacher::latest()->pluck('id','name')
        ]);
    }

    public function update(StoreStudentRequest $request, $id){
        Student::where('id',$id)->update($request->validated());
        return redirect()->route('students.index');
    }

    public function destroy($id){
        Student::where('id',$id)->delete();
        return back();
    }
}
