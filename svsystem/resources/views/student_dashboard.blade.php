<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/student_dashboard.css') }}">
</head>
<body>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="">My Profile</a></li>
        <li><a href="#violations">Violations</a></li>
        <li><a href="#policy">Policy</a></li>
        <li><a href="#intervention">Intervention Programs</a></li>
        <li><a href="#incident">Incident Report</a></li>
        <li><a href="">Logout</a></li>
    </ul>

    <!-- Content sections for each navigation link -->
    <div class="content" id="about">
        <h2>About</h2>
        <p>Add your about content here</p>
    </div>
    <div class="content" id="profile">
        <h2>My Profile</h2>
        <p>Add your profile content here</p>
    </div>
    <!-- Add more content sections for other links -->

    <footer>
        <p>&copy; {{ date("Y") }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
