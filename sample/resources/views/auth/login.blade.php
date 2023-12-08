<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>Login page</title>
</head>
<body>
    @isset($errors)
    <P class='error_msg'>{{ $errors->first('message') }}</P>
    @endisset
    <form name="loginform" action="/login" method="post">
        {{ csrf_field() }}
        <dl>
            <dt>Email address:</dt>
            <dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
            <dt>password:</dt>
            <dd><input type="password" name="password" size="30"></dd>
        </dl>
        <button type="sunmit" name="action" value="send">Login</button>
    </form>
</body>
</html>