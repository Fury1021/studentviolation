<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>
<body>
    <header>        
        <nav>
            <div class="logo">
                <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
            </div>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#violations">Violations</a></li>
            <li><a href="#policy">Policy</a></li>
            <li><a href="#intervention">Intervention Programs</a></li>
            <li><a href="#incident">Incident Report</a></li>
        </ul>
        </nav>
    </header>
    <h2 style="margin-top: 100px;">Sign In</h2>
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
    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
