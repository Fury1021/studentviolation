<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <h1>Welcome to Our Violation System</h1>
    <div class="button-container">
    <button><a href="{{ route('login') }}">admin</a></button>
    <button><a href="{{ route('loginstudent') }}">Students</a></button>
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
