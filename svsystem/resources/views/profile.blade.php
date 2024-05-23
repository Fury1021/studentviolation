<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/student_dashboard.css') }}">
</head>
<body>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="{{ route('profile', ['id' => Auth::user()->id]) }}">My Profile</a></li>
        <li><a href="#violations">Violations</a></li>
        <li><a href="#policy">Policy</a></li>
        <li><a href="#intervention">Intervention Programs</a></li>
        <li><a href="#incident">Incident Report</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>

    @if(Auth::check())
        <h1>Welcome, {{ $student->name }}</h1>
        <h2>Student Details</h2>
        <p>Email: {{ $student->email }}</p>
        <p>Student Number: {{ $student->student_no }}</p>   

        @if($incidentReports->isNotEmpty())
            <h3>Incident Reports:</h3>
            @foreach($incidentReports as $incident)
                <p>Date: {{ $incident->date }}</p>
                <p>Type of Violation: {{ $incident->violationType->name }}</p>
                <button><a href="{{ route('student.viewIncidentReport', ['id' => $incident->id]) }}">View Details</a></button>
                <br> <!-- Add a line break for better separation -->
            @endforeach
        @else
            <p>No incident reports found</p>
        @endif
    @else
        <p>Unauthorized access</p>
    @endif

    <footer>
        <p>&copy; {{ date('Y') }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
