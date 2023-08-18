@extends('layout.app')
@section('content')
@section('title')
Edit Book
@endsection('title')
@section('description')
Edit
@endsection('description')
<form method="POST" action="/users/{{$user->id}}">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">  <input type="text" name="name" value="{{$user->name}}" class="form-control"><br>
    <div class="form-group"> <input type="text" name="age" value="{{$user->age}}" class="form-control"><br>
    <div class="form-group"> <input type="text" name="phone" value="{{$user->phone}}" class="form-control"><br>
    <div class="form-group"> <input type="text" name="address" value="{{$user->address}}" class="form-control"><br>
    <div class="form-group"> <input type="email" name="email" value="{{$user->email}}" class="form-control"><br>
    <div class="form-group"> <input type="password" name="password" value="{{$user->password}}" class="form-control"><br>
    <div class="form-group"> <input type="submit" name="submit" class="btn btn-primary">
    <a  href="/students" class="btn btn-danger">Back</a>
</form>
@endsection('content')