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
        <form class="border border-primary p-5" method="POST" style="background-color:aliceblue" action="{{route('teachers.store')}}">
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
                <label for="previous_experience">Previous Experience</label>
                <input type="number" name="previous_experience" class="form-control" id="previous_experience" placeholder="Enter Previous Experience" value="{{ old('previous_experience') }}">
            </div>
            <div class="form-group w-50 m-auto">
                <label for="comments">Comments</label>
                <textarea class="form-control" name="comments" id="comments" placeholder="Enter Comments">{{ old('comments') }}</textarea>
            </div>
            <div class="form-group w-50 m-auto">
                <label for="joined_at">Joined At</label>
                <input type="date" class="form-control" name="joined_at" id="joined_at" value="{{ now()->format('Y-m-d') }}" />
            </div>
            <div class="form-group w-50 m-auto">
                <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection