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
        <th>Password</th>
        <th colspan="3" style="text-align: center;">Actions</th>
    </tr>
        @foreach($admins as $admin)
        <tr>
        <td>{{$admin['id']}}</td>
        <td>{{$admin['name']}}</td>
        <td>{{$admin['email']}}</td>
        <td>{{$admin['password']}}</td>
        <td><a href="/admins/{{$admin['id']}}" class="btn btn-success">View</a></td>
        <td><a href="admins/{{$admin['id']}}/edit" class="btn btn-primary">Edit</a></td>
        <td><form method="post" action="/admins/{{$admin['id']}}">
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
