@extends('layout.app')
@section('content')
@section('title')
View Book
@endsection('title')
@section('description')
View
@endsection('description')
<ul class="list-group mt-3">
<li class="list-group-item">Book id={{$book->id}}</li>
<li class="list-group-item">Book name={{$book->book_name}}</li>
<li class="list-group-item">Author name={{$book->author_name}}</li>
<li class="list-group-item">Book decription={{$book->decription}}</li>
</ul>
<a href="/books" class="btn btn-danger mt-3" >Back</a>
@endsection('content')

