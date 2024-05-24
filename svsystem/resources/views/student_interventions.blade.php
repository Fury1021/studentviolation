<!DOCTYPE html>
<html>
<head>
    <title>Interventions</title>
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
        <li><a href="{{ route('student_dashboard') }}">About</a></li>
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
        <img src="{{ asset('images/intervention.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">Inverventions</h2>
                <p class="card-description">The policies and plans put in place to deal with and rectify student infractions are known as interventions. Based on the type and seriousness of the infraction, the Violation Management System includes a number of intervention options. A few of these might be restorative justice initiatives, behavioral training, counseling services, and parental involvement campaigns. The purpose of interventions is to help the student acquire improved behavior patterns and decision-making abilities in addition to addressing the immediate problem. Students can learn from their mistakes and a more positive school environment are fostered by the system, which focuses on constructive and rehabilitative approaches.</p>
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
