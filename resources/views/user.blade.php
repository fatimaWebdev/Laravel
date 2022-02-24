<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login Laravel</title>
</head>
<body>

    <form action="/conusers" method="POST">
        <h1>login page</h1>
        @csrf
        <input type="text" name="username" placeholder="enter usrename">
        <input type="password" name="pasword" id="" placeholder="enter pasword">
        <button type="submit">Login</button>
    </form>
    
</body>
</html>