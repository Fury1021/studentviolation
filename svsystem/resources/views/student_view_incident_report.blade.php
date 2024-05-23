<!-- resources/views/student_view_incident_report.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View Incident Report</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/student_dashboard.css') }}">
</head>
<body>
    <nav>
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
    </nav>
    <h2>Incident Report Details</h2>

    @if ($incident)
        <p>Date: {{ $incident->date }}</p>
        <p>Details: {{ $incident->details }}</p>
        <p>Level of Violation: {{ $incident->level_of_violation }}</p>
        <p>Type of Violation: {{ $violationType->name }}</p>
    @else
        <p>Incident report not found</p>
    @endif

    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <footer>
        <p>&copy; {{ date('Y') }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
