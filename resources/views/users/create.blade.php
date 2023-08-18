@extends('layout.app')
@section('content')
@section('title')
Add Student
@endsection('title')
@section('description')
Add
@endsection('description')
<form method="post" action="/users">
    @csrf
    <input type="text" name="name" placeholder="Enter Student Name"><br>
    <input type="text" name="age" placeholder="Enter Age"><br>
    <input type="text" name="phone" placeholder="Enter Phone"><br>
    <input type="text" name="address" placeholder="Enter Address"><br>
    <input type="email" name="email" placeholder="Enter Email"><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" name="submit"><br>
</form>
@endsection('content')
