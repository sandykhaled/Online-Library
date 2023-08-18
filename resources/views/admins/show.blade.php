@extends('layout.app')
@section('content')
@section('title')
View Student
@endsection('title')
@section('description')
View
@endsection('description')
<ul class="list-group mt-3">
<li class="list-group-item">Admin id={{$admin->id}}</li>
<li class="list-group-item">Admin name={{$admin->name}}</li>
<li class="list-group-item">Email={{$admin->email}}</li>
<li class="list-group-item">Password={{$admin->password}}</li>
</ul>
<a href="/admins" class="btn btn-danger">Back</a>
@endsection('content')
