<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/svlogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_dashboard.css') }}">
</head>
<body>
    <header>        
    <nav>
        <div class="logo">
            <a href="{{ route('admin_dashboard') }}">
            <img src="{{ asset('images/svlogo.png') }}" alt="Logo">
        </div>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="{{ route('admin.liststudents') }}">Students</a></li>
        <li><a href="#violations">Violations</a></li>
        <li><a href="#policy">Policy</a></li>
        <li><a href="#intervention">Intervention Programs</a></li>
        <li><a href="#incident">Incident Report</a></li>
        <li><a href="{{ route('login') }}">Logout</a></li>
    </ul>
    </nav>
    </header>
    <h1>Welcome, Admin!</h1>

    <!-- Content sections for each navigation link -->
<div class="card-container">
    <div class="card">
        <img src="{{ asset('images/about.png') }}" alt="Logo">
            <div class="card-content">
                <h2 class="card-title">ABOUT</h2>
                <p class="card-description">Violation Management System (VMS) handles the management and tracing of student misconducts in schools. The system is provided as a whole array of violation-related types such as academic cheating, student misbehavior, poor attendance records, substance abuse and violation of dress codes and other as well. Different levels are designed to categorize violations according to their intensity so that they are subject to appropriate consequences when there are minor or major cases. VMS addresses these violations through integration with other programs like counseling services, behavioral workshops, parental involvement initiatives and restorative justice methods. This system also enables correct documentation in line with school policies as well as timely stakeholder communication and follow-up on treatments. It has some key components such as easy-to-use interface, instant access to information, that make it one of the best tool for ensuring privacy and safety in education environment. </p>
            </div>
    </div>
</div>

    <footer>
        <p>&copy; {{ date('Y') }} Adamson University. All Rights Reserved.</p>
    </footer>
</body>
</html>
