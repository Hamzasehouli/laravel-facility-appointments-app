<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action={{route('register')}} method="POST">
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
</body>
</html>