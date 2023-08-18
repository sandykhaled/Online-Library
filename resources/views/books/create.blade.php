@extends('layout.app')
@section('content')
@section('title')
Add Student
@endsection('title')
@section('description')
Add
@endsection('description')
<form method="post" action="/books">

    @csrf
    <div class="form-group mt-3"><input type="text" name="book_name" placeholder="Enter Book Name" class="form-control"><br></div>
    <div class="form-group"><input type="text" name="author_name" placeholder="Enter Author Name" class="form-control"><br></div>
    <div class="form-group"><input type="text" name="decription" placeholder="Enter Description" class="form-control"><br></div>
    <!-- <input type="text" name="posted_by" placeholder="Enter Admin Name"><br> -->
    <input type="submit" name="submit" class="btn btn-primary">
    <a href="/books" class="btn btn-danger">Back</a>
</form>
@endsection('content')