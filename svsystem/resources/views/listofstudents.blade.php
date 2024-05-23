<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/listofstudents.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="">Students</a></li>
            <li><a href="#violations">Violations</a></li>
            <li><a href="#policy">Policy</a></li>
            <li><a href="#intervention">Intervention Programs</a></li>
            <li><a href="#incident">Incident Report</a></li>
            <li><a href="{{ route('login') }}">Logout</a></li>
        </ul>
    </nav>
    <h2>Student List</h2>
    <button><a href="{{ route('register') }}">Add Student</a></button>
    <table border="1">
        <tr>
            <th>Student No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->student_no }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td><a href="{{ route('admin.viewstudent', ['id' => $student->id]) }}">View Details</a></td>
        </tr>
        @endforeach
    </table>
    <footer>
        <p>&copy; {{ date('Y') }} Your School Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
