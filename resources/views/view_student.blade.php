@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home" class="btn btn-primary mb-5">Go To Home Page</a>
    <div class="row justify-content-center">
        <form class="border border-primary p-5" method="POST" style="background-color:aliceblue" action="{{route('students.update',$student->id)}}">
            <div class="form-group w-50 m-auto">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ $student->name }}" readonly>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age" value="{{ $student->age }}" readonly>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="previous_experience">Teacher</label>
                <input type="text" class="form-control" value="{{ $student->teacher->name }}" readonly>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="class">Class</label>
                <input type="text" class="form-control" name="class" id="class" placeholder="Enter Class" value="{{ $student->class }}" readonly />
            </div>
            <div class="form-group w-50 m-auto">
                <label for="admission_date">Admission Date</label>
                <input type="text" class="form-control" name="admission_date" id="admission_date" value="{{$student->admission_date->format('Y-m-d')}}" readonly />
            </div>
            <!-- <div class="form-group w-50 m-auto">
                <label for="yearly_fees">Yearly Fees</label>
                <input type="text" class="form-control" name="yearly_fees" id="yearly_fees" placeholder="Enter Yearly Fees" value="{{$student->yearly_fees}}" readonly />
            </div> -->
            <div class="form-group w-50 m-auto">
                <label class="sr-only" for="inlineFormInputGroup">Yearly Fees</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rs. </div>
                    </div>
                    <input type="text" class="form-control" name="yearly_fees" id="yearly_fees" placeholder="Enter Yearly Fees" value="{{$student->yearly_fees}}" readonly />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection