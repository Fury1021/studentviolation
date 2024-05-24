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
     <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('admin.liststudents') }}">Students</a></li>
        <li><a href="{{ route('violations') }}">Violations</a></li>
        <li><a href="{{ route('policy') }}">Policy</a></li>
        <li><a href="{{ route('interventions') }}">Intervention Programs</a></li>
        <li><a href="{{ route('login') }}">Logout</a></li>
    </ul>
    </nav>
    </header>
    <h1>Welcome, Admin!</h1>

    <!-- Content sections for each navigation link -->
<div class="card-container" style="margin-bottom: 20px;">
    <div class="card">
        <img src="{{ asset('images/policy.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Policy</h2>
                <p class="card-description">Rules and policies established by the school must be followed, deviations from these guidelines are considered violations. These can include less serious transgressions like dressing code violations or more significant ones like bullying or drug addiction. To guarantee that an exhaustive record is kept, every infraction is classified and entered into the system. In order to choose the best interventions and penalties, it is essential to evaluate the severity and frequency of the infractions, which is made easier with the aid of this classification. The approach guarantees uniformity and equity in the disciplinary procedure by methodically handling infractions.</p>
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
