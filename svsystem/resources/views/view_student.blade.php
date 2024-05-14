<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/view_student.css') }}">
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
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>
    <h2>Student Details</h2>

    @if($student)
        <h3>Name: {{ $student->name }}</h3>
        <p>Email: {{ $student->email }}</p>

        @if($incident_reports->count() > 0)
            <h4>Incident Reports:</h4>
            @foreach($incident_reports as $incident)
                <p>Date: {{ $incident->date }}</p>
                <p>Level of Violation: {{ $incident->level_of_violation }}</p>
                <button><a href="{{ route('view_incident_report', ['id' => $incident->id]) }}">View Details</a></button>
                <br>
            @endforeach
        @else
            <p>No incident reports found</p>
        @endif
    @else
        <p>Student not found</p>
    @endif

    <button><a href="{{ route('add_incident_report', ['id' => $student->id]) }}">Add Incident Report</a></button>
    <button><a href="{{ route('admin.liststudents') }}">Back to Student List</a></button>
    <footer>
        <p>&copy; {{ date('Y') }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
