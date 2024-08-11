@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home" class="btn btn-primary mb-2">Go To Home Page</a>
    <a href="{{route('students.create')}}" class="btn btn-primary mb-2" style="float:right">Add New Student</a>
    <div class="row justify-content-center">
        <x-card row="col-3" text="Total Students" value="{{$students->count()}}"></x-card>
        <x-card row="col-3 offset-sm-2" text="Highest Admission To Class" value="">
            <b>Class - {{ $classesAssigned->first()->class }}</b> <br>
            <b>Total Students - {{ $classesAssigned->first()->total }}</b>
        </x-card>
        <x-card row="col-3 offset-sm-2" text="Lowest Admission To Class" value="">
            <b>Class - {{ $classesAssigned->last()->class }}</b> <br>
            <b>Total Students - {{ $classesAssigned->last()->total }}</b>
        </x-card>
    </div>
    <div class="row mt-5">
        <div class="table-responsive">
            <table class="table" id="student-table">
                <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Teacher Assigned</th>
                        <th scope="col">Class</th>
                        <th scope="col">Admission Date</th>
                        <th class="col">Yearly Fees</th>
                        <th class="col">Created At</th>
                        <th class="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->teacher->name }}</td>
                        <th>{{ $student->class }}</th>
                        <td>{{ $student->admission_date->format('d / M / Y') }}</td>
                        <td>Rs. {{ $student->yearly_fees }}</td>
                        <td>{{ $student->created_at->format('d / M / Y') }}</td>
                        <td>
                            <a href="{{route('students.show',$student->id)}}">View</a>
                            <a href="{{route('students.edit',$student->id)}}">Edit</a>
                            <form action="{{route('students.destroy',$student->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"><span class="text-primary text-decoration-underline">Delete</span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $('#student-table').DataTable();
</script>
@endsection