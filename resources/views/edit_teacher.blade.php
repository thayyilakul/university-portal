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
        <form class="border border-primary p-5" style="background-color:aliceblue" action="{{route('teachers.update',$teacher->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
            <div class="form-group w-50 m-auto">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$teacher->name}}">
            </div>
            <div class="form-group w-50 m-auto">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter Age" maximum=70 value="{{$teacher->age}}">
            </div>
            <div class="form-group w-50 m-auto">
                <label for="previous_experience">Previous Experience</label>
                <input type="number" name="previous_experience" class="form-control" id="previous_experience" placeholder="Enter Previous Experience" value="{{$teacher->previous_experience}}">
            </div>
            <div class="form-group w-50 m-auto">
                <label for="comments">Comments</label>
                <textarea class="form-control" name="comments" id="comments" placeholder="Enter Comments"> {{$teacher->comments}}</textarea>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="joined_at">Joined At</label>
                <input type="date" class="form-control" name="joined_at" id="joined_at" value="{{$teacher->joined_at->format('Y-m-d')}}"/>
            </div>
            <div class="form-group w-50 m-auto">
                <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection