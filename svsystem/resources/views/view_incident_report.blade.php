
<!DOCTYPE html>
<html>
<head>
    <title>View Incident Report</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/view_incident_report.css') }}">
</head>
<body>
    <nav>
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
    <h2>Incident Report Details</h2>

    @if($incident)
        <p>Date: {{ $incident->date }}</p>
        <p>Details: {{ $incident->details }}</p>
        <p>Level of Violation: {{ $incident->level_of_violation }}</p>
        <p>Type of Violation: {{ $violationType ? $violationType->name : 'Unknown' }}</p>
        <button><a href="{{ route('edit_incident_report', ['id' => $incident->id]) }}">Edit</a></button>
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
