@extends('layout')
@section('content')
    

<form action={{route('register')}} method="POST">
    @csrf
    <div>
        @error('name')
            {{$message}}
        @enderror
        <label for="name">
            Name
        </label>
        <input name="name" id="name" type="name" value={{old('name')}}>
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
        @error('password_confirmation')
        {{$message}}
        @enderror
        <label for="password_confirmation">
            Password confirmation
        </label>
        <input name="password_confirmation" id="password_confirmation" type="password">
        <button type="submit">submit</button>
    </div>
</form>

@endsection