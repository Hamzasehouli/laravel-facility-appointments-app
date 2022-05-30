
@extends('layout')


    @section('content')
    <p>Home</p>
    <div id="example"></div>
    <a href={{route('login')}}>Log in</a>
    <a href={{route('register')}}>Sign up</a>
    
    @endsection
