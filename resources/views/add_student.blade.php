@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home" class="btn btn-primary mb-5">Go To Home Page</a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row justify-content-center">
        <form class="border border-primary p-5" method="POST" style="background-color:aliceblue" action="{{route('students.store')}}">
            @csrf
            <div class="form-group w-50 m-auto">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ old('name') }}">
            </div>
            <div class="form-group w-50 m-auto">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age" value="{{ old('age') }}">
            </div>
            <div class="form-group w-50 m-auto">
                <label for="previous_experience">Teacher</label>
                 <select name="teacher_id" id="" class="form-control" value="{{ old('teacher_id') }}">
                    <option value="">Select Teacher</option>
                    @foreach($teachers as $name => $id)
                    <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                 </select>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="class">Class</label>
                <input type="text" class="form-control" name="class" id="class" placeholder="Enter Class" value="{{old('class')}}"/>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="admission_date">Admission Date</label>
                <input type="date" class="form-control" name="admission_date" id="admission_date"/>
            </div>
            <div class="form-group w-50 m-auto">
                <label class="sr-only" for="inlineFormInputGroup">Yearly Fees</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rs. </div>
                    </div>
                    <input type="text" class="form-control" name="yearly_fees" id="yearly_fees" placeholder="Enter Yearly Fees"/>
                </div>
            </div>
            <div class="form-group w-50 m-auto">
                <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection