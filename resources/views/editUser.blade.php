@extends('layout.main')
@section('title') {{ "Add User" }} @endsection
@section('mainContent')
<div class="row">
    <div class="col-md-12">
        <h1 class="display-1">Edit User</h1>
    <form action="{{ url('updateUser') }}" method="POST">
    @csrf
    <input type="hidden" name="record_id" value="{{ $data->id }}">
      <div class="mb-3">
        <label for="Name" class="form-label">Student Name</label>
        <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="name" value="{{ $data->name }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="dob" value="{{ $data->dob }}"> 
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
    </div>
</div>
@endsection
        
     