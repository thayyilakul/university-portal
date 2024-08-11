@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home" class="btn btn-primary mb-2">Go To Home Page</a>
    <a href="{{route('teachers.create')}}" class="btn btn-primary mb-2" style="float:right">Add New Teacher</a>
    <div class="row justify-content-center">
        <x-card row="" text="Total Teachers" value="{{ $teachers->count() }}"></x-card>
        <x-card row="offset-2" text="Maximum Students Assigned To" value="{{ $highestAllottedStudentsTo }}"></x-card>
        <x-card row="offset-2" text="Minimum Students Assigned To" value="{{ $lowestAllottedStudentsTo }}"></x-card>
    </div>
    <div class="row mt-5">
        <div class="table-responsive">
            <table class="table" id="teacher-table">
                <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Previous Experience</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Joined At</th>
                        <th class="col">Created At</th>
                        <th class="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->age }}</td>
                        <td>{{ $teacher->previous_experience }}</td>
                        <th>{{ $teacher->comments }}</th>
                        <td>{{ $teacher->joined_at->format('d / M / Y') }}</td>
                        <td>{{ $teacher->created_at->format('d / M / Y') }}</td>
                        <td>
                            <a href="{{route('teachers.show',$teacher->id)}}">View</a>
                            <a href="{{route('teachers.edit',$teacher->id)}}">Edit</a>
                            <form action="{{route('teachers.destroy',$teacher->id)}}" method="POST">
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
    $('#teacher-table').DataTable();
</script>
@endsection