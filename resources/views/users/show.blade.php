@extends('layout.app')
@section('content')
@section('title')
View Student
@endsection('title')
@section('description')
View
@endsection('description')
<ul class="list-group mt-3">
<li class="list-group-item">Student id={{$user->id}}</li>
<li class="list-group-item">Student name={{$user->name}}</li>
<li class="list-group-item">Age={{$user->age}}</li>
<li class="list-group-item">Phone={{$user->phone}}</li>
<li class="list-group-item">Address ={{$user->address}}</li>
<li class="list-group-item">Email ={{$user->email}}</li>
<li class="list-group-item">Password ={{$user->password}}</li>
</ul>
<a href="/students" class="btn btn-danger">Back</a>
@endsection('content')
