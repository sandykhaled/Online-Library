@extends('layout.app')
@section('content')
@section('title')
All Students
@endsection('title')
@section('description')
Home
@endsection('description')
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3" style="text-align: center;">Actions</th>
    </tr>
        @foreach($users as $user)
        <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td><a href="/users/{{$user['id']}}" class="btn btn-success">View</a></td>
        <td><a href="users/{{$user['id']}}/edit" class="btn btn-primary">Edit</a></td>
        <td><form method="post" action="/users/{{$user['id']}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
            
        </form>
        </td>
        </tr>
        @endforeach
</table>
<a href="/books" class="btn btn-danger">Back</a>
@endsection('content')
