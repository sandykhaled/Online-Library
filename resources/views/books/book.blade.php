@extends('layout.app')
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
        <th>date</th>
        <th colspan="3" style="text-align: center;">Actions</th>
    </tr>
        @foreach($books as $book)
        <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->book_name}}</td>
        <td>{{$book->author_name}}</td>
        <td>{{$book->decription}}</td>
        <td>{{$book->created_at}}</td>
        <td><a href="/books/{{$book['id']}}" class="btn btn-primary">View</a></td>
        <td><a href="/books/{{$book['id']}}/edit" class="btn btn-success">Edit</a></td>
        <td><form method="post" action="/books/{{$book['id']}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger" >
            
        </form></td>
        </tr>
        @endforeach
</table>
@endsection('content')