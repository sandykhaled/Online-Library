@extends('layout.apps')
@section('content')
<table class="table">
<tr>
    
        <th>Name</th>
        <th>Author</th>
        <th>Description</th>
        </tr>
@if(session('cart'))
@foreach(session('cart') as $id=>$details)
<tr>
    <td>{{$details['book_name']}}</td>
    <td>{{$details['author_name']}}</td>
    <td>{{$details['decription']}}</td>
    <td><a href="/back-to-shelf/{{$id}}" class="btn btn-danger">Back To Shelf</a></td>
</tr> 
@endforeach
@endif
</table>

@endsection('content')