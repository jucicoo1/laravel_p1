<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>User Registeration</title>
</head>
<body>
    <ul>
        @if (count($errors))
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form name="registform" action="/register" method="post" id="registform">
        {{ csrf_field() }}
        <dl>
            <dt>Name:</dt>
            <dd>
                <input type="text" name="name" size=30>
            </dd>
        </dl>
        <dl>
            <dt>Enail address:</dt>
            <dd>
                <input type="text" name="email" size=30>
            </dd>
        </dl>
        <dl>
            <dt>Passowrd:</dt>
            <dd>
                <input type="password" name="password" size=30>
            </dd>
        </dl>
        <dl>
            <dt>Passowrd(confirmation):</dt>
            <dd>
                <input type="password" name="password_confirmation" size=30>
            </dd>
        </dl>
        <button type="submit" name='action' value='send'>Submit</button>
    </form>
</body>
</html>