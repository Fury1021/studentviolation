<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h2>Login</h2>
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="{{ route('register') }}">Create Account</a></p>
</body>
</html>
