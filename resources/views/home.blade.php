@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-card row="col-3 mt-5" text="Total Students" value="{{ $totalStudents }}">
            <a href="/students" class="btn btn-primary">Go To Students Page</a>
        </x-card>
        <x-card row="col-3 offset-sm-2 mt-5" text="Highest Admission In Class" value=''>
            <b>Class - {{ $classesAssigned->first()->class }}</b> <br>
            <b>Total Students - {{ $classesAssigned->first()->total }}</b>
        </x-card>
        <x-card row="col-3 offset-sm-2 mt-5" text="Lowest Admission In Class" value=''>
            <b>Class - {{ $classesAssigned->last()->class }}</b> <br>
            <b>Total Students - {{ $classesAssigned->last()->total }}</b>
        </x-card>
        <x-card row="col-3 mt-5" text="Total Teachers" value="{{ $totalTeachers }}">
            <a href="/teachers" class="btn btn-primary">Go To Teachers Page</a>
        </x-card>
        <x-card row="col-3 offset-sm-2 mt-5" text="Maximum Students Assigned To" value="{{ $highestAllottedStudentsTo }}"></x-card>
        <x-card row="col-3 offset-sm-2 mt-5" text="Minimum Students Assigned To" value="{{ $lowestAllottedStudentsTo }}"></x-card>
    </div>
</div>
@endsection