<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>User Registeration</title>
</head>
<body>
    <form name="registform" action="/register" method="post" id="registform">
        {{ csrf_field() }}
        <dl>
            <dt>Name:</dt>
            <dd>
                <input type="text" name="name" size=30>
                <span>{{ $errors->first('name') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>Enail address:</dt>
            <dd>
                <input type="text" name="email" size=30>
                <span>{{ $errors->first('email') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>Passowrd:</dt>
            <dd>
                <input type="password" name="password" size=30>
                <span>{{ $errors->first('password') }}</span>
            </dd>
        </dl>
        <dl>
            <dt>Passowrd(confirmation):</dt>
            <dd>
                <input type="password" name="password_confirmation" size=30>
                <span>{{ $errors->first('password_confirmation') }}</span>
            </dd>
        </dl>
        <button type="submit" name='action' value='send'>Submit</button>
    </form>
</body>
</html>