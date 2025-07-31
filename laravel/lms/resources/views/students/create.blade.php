<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
</head>
<body>
    <div>
        <a href="{{ route('students.index') }}">← Back to Students</a>
        <a href="{{ route('home') }}">Home</a>
    </div>

    <h1>Add New Student</h1>

    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname"  required>
        </div>
        
        <div>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname"  required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        
        <button type="submit">Add Student</button>
    </form>
</body>
</html>