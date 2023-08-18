@extends('layout.app')
@section('content')
@section('title')
Edit Book
@endsection('title')
@section('description')
Edit
@endsection('description')
<form method="POST" action="/admins/{{$admin->id}}">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">  <input type="text" name="name" value="{{$admin->name}}" class="form-control"><br>
    <div class="form-group"> <input type="email" name="email" value="{{$admin->email}}" class="form-control"><br>
    <div class="form-group"> <input type="password" name="password" value="{{$admin->password}}" class="form-control"><br>    
    <div class="form-group"> <input type="submit" name="submit" class="btn btn-primary">
    <a  href="/admins" class="btn btn-danger">Back</a>
</form>
@endsection('content')