<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <p>Home</p>
    <div id="example"></div>
    <a href={{route('login')}}>Log in</a>
    <a href={{route('register')}}>Sign up</a>
    
</body>
</html>