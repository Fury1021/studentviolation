<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
</head>
<body>
    <header>        
    <nav>
        <div class="logo">
            <a href="{{ route('admin_dashboard') }}">
            <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
        </div>
    <ul>
        <li><a href="{{ route('student_about') }}">About</a></li>
        <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}">My Profile</a></li>
        <li><a href="{{ route('student_violations') }}">Violations</a></li>
        <li><a href="{{ route('student_policy') }}">Policy</a></li>
        <li><a href="{{ route('student_interventions') }}">Intervention Programs</a></li>
        <li><a href="{{ route('login') }}">Logout</a></li>
    </ul>
    </nav>
    </header>
    <h1>Welcome, Student!</h1>

    <!-- Content sections for each navigation link -->
<div class="card-container" style="margin-bottom: 20px;">
    <div class="card">
        <img src="{{ asset('images/violations.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">VIOLATIONS</h2>
                <p class="card-description">Any acts or behaviors that depart from the set rules and policies of the school are considered violations. These might be anything from transgressions of the dress code to more serious crimes like bullying or drug misuse. Every infraction is classified and entered into the system to guarantee that an exhaustive record is kept up to date. This classification aids in evaluating the frequency and seriousness of the infractions, which is essential for choosing the right courses of action and penalties. The system makes sure that the disciplinary procedure is equitable and consistent by methodically handling infractions.</p>
            </div>
    </div>
</div>

    <button id="goback" onclick="goBack()">Go Back</button>

    <script>
        function goBack() { 
            window.history.back();
        }
    </script>
    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
