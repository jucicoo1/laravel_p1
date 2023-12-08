<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>First page</title>
</head>
<body>
    <P>Hello to Laravel</P>
    @if (Auth::check())
    <p>{{ \Auth::user()->name}}</p><br>
    <p><a href="/logout">logout</a></p>
    @else
    <p>Guest</p>
    <p><a href="/login">Login</a></p><br>
    <p><a href="/register">Sign up</a></p>
    @endif
</body>
</html>