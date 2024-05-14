<!-- resources/views/edit_incident_report.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Incident Report</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit_incident_report.css') }}">
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
    <h2>Edit Incident Report</h2>

    <form action="{{ route('update_incident_report') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $incident->id }}">
        <label>Date:</label><br>
        <input type="date" name="date" value="{{ $incident->date }}" required><br><br>
        <label>Details:</label><br>
        <textarea name="details" required>{{ $incident->details }}</textarea><br><br>
        <label>Level of Violation/ Disciplinary Actions:</label><br>
        <select name="level_of_violation" required>
            <!-- Add options for violation levels here -->
            <option value="Detention" {{ $incident->level_of_violation == "Detention" ? 'selected' : '' }}>Detention</option>
            <option value="Sending a student to the principal's office" {{ $incident->level_of_violation == "Sending a student to the principal's office" ? 'selected' : '' }}>Sending a student to the principal's office</option>
            <option value="Reprimand" {{ $incident->level_of_violation == "Reprimand" ? 'selected' : '' }}>Reprimand</option>
            <!-- Add more options if needed -->
        </select><br><br>
        <label>Type of Violation:</label><br>
        <select name="violation_type_id" required>
            <!-- Add options for violation types here -->
            @foreach($violationTypes as $violationType)
                <option value="{{ $violationType->id }}" {{ $incident->violation_type_id == $violationType->id ? 'selected' : '' }}>{{ $violationType->name }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Update">
    </form>
    
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
