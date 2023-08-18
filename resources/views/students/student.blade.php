@extends('layout.apps')
@section('content')
@section('title')
Home Page
@endsection('title')
@section('description')
Home
@endsection('description')
<table class ="table table-striped ">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Author</th>
        <th>Description</th>
        <th colspan="2" style="text-align: center;">Actions</th>
    </tr>
        @foreach($books as $book)
        <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->book_name}}</td>
        <td>{{$book->author_name}}</td>
        <td>{{$book->decription}}</td>
        <td><a href="{{url('add-to-cart/'.$book->id)}}" class="btn btn-primary">Borrow</a></td>
        </tr>
        @endforeach
</table>
@endsection('content')