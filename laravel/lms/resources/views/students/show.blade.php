<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <div>
        <a href="{{ route('students.index') }}">← Back to Students</a>
        <a href="{{ route('home') }}">Home</a>
    </div>

    <h1>Student Details</h1>

    <div>
        <div>
            <strong>First Name:</strong> {{ $student->fname }}
        </div>
        
        <div>
            <strong>Last Name:</strong> {{ $student->lname }}
        </div>
        
        <div>
            <strong>Email:</strong> {{ $student->email }}
        </div>
    </div>

    <div>
        <a href="{{ route('students.edit', $student->id) }}">Edit Student</a>
        <a href="{{ route('students.index') }}">Back to List</a>
    </div>
</body>
</html>