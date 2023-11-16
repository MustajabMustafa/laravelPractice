@extends('layout.main')
@section('title') {{ "Users" }} @endsection
@section('mainContent')
<div class="row">
            <div class="col-md-12">
                <h1 class="display-1 text-success">Students Record</h1>
                <a href="{{ url('addNewUser') }}" class="btn btn-sm btn-success">Add new Student</a>
                <hr>
                <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>DOB</th>
                                    <th>Submission</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->dob }}</td>
                                        <td>{{ $student->created_at }}</td>
                                        <td><a href="" class="btn btn-sm btn-warning">Edit</a> | <a href="{{ url('deleteUser') }}/{{ $student->id }}" class="btn btn-sm btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
            </div>
@endsection
        
     