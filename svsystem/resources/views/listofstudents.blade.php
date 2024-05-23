<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/listofstudents.css') }}">
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
    <h2 style="text-align: center;">Students List</h2>
    <div class="buttons-container">
        <button><a href="{{ route('register') }}">Add Student</a></button>
        <button id="goback" onclick="goBack()">Go Back</button>
    </div>
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
