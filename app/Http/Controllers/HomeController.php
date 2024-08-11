<?php

namespace App\Http\Controllers;

use App\Models\{Student, Teacher};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = Student::select('teacher_id')->get();
        $classesAssigned = Student::select('class',\DB::raw('count(*) as total'))->groupBy('class')->orderBy('total','desc')->get();
        return view('home',[
            'totalStudents' => Student::count(),
            'totalTeachers' => Teacher::count(),
            'classesAssigned' => $classesAssigned,
            'highestAllottedStudentsTo' =>  $student->max()->teacher->name,
            'lowestAllottedStudentsTo' =>  $student->min()->teacher->name,
        ]);
    }
}
