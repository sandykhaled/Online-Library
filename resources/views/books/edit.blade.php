@extends('layout.app')
@section('content')
@section('title')
Edit Book
@endsection('title')
@section('description')
Edit
@endsection('description')

<form method="POST" action="/books/{{$book->id}}">
    @csrf
    @method('PUT')
    <div class="form-group mt-3"><input type="text" name="book_name" value="{{$book->book_name}}" placeholder="Enter Book Name" class="form-control"><br></div>
    <div class="form-group"><input type="text" name="author_name" value="{{$book->author_name}}" placeholder="Enter Author Name" class="form-control"><br></div>
    <div class="form-group"><input type="text" name="decription" value="{{$book->decription}}" placeholder="Enter Description" class="form-control"><br></div>
    <input type="submit" name="submit" class="btn btn-primary">
    <a href="/books" class="btn btn-danger" >Back</a>
</form>
@endsection('content')