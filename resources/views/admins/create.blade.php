@extends('layout.app')
@section('content')
@section('title')
Add Student
@endsection('title')
@section('description')
Add
@endsection('description')
<form method="post" action="/admins">
    @csrf
    <div class="form-group mt-3"> <input type="text" name="name" placeholder="Enter Admin Name"  class="form-control"><br></div>
    <div class="form-group mt-3"> <input type="email" name="email" placeholder="Enter Email"  class="form-control"><br></div>
    <div class="form-group mt-3"> <input type="password" name="password" placeholder="Enter Password"  class="form-control"><br></div>
    <div class="form-group mt-3"><input type="submit" name="submit" class="btn btn-primary"><br>
</form>
@endsection('content')
