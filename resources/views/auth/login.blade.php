@extends('layout')
    @section('content')
        
    <form action={{route('login')}} method="POST">
        @csrf
    <div>
        @error('email')
        {{$message}}
    @enderror
        <label for="email">
            Email
        </label>
        <input name="email" id="email" type="email" value={{old('email')}}>
        @error('password')
        {{$message}}
    @enderror
        <label for="password">
            Password
        </label>
        <input name="password" id="password" type="password">

        <button type="submit">Log in</button>
    </div>
</form>

        @endsection