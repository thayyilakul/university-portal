@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home" class="btn btn-primary mb-5">Go To Home Page</a>
    <div class="row justify-content-center">
        <form class="border border-primary p-5" style="background-color:aliceblue" action="{{route('teachers.update',$teacher->id)}}">
            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
            <div class="form-group w-50 m-auto">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" value="{{$teacher->name}}" readonly>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age" placeholder="Enter Age" maximum=70 value="{{$teacher->age}}" readonly>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="previous_experience">Previous Experience</label>
                <input type="text" class="form-control" id="previous_experience" placeholder="Enter Previous Experience" value="{{$teacher->previous_experience}}" readonly>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="comments">Comments</label>
                <textarea class="form-control" name="comments" id="comments" placeholder="Enter Comments" readonly> {{$teacher->comments}}</textarea>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="joined_at">Joined At</label>
                <input type="text" class="form-control" id="previous_experience" placeholder="Enter Previous Experience" value="{{$teacher->joined_at->format('Y-m-d')}}" readonly>
            </div>
        </form>
    </div>
</div>
@endsection