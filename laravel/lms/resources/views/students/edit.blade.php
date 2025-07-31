<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <div>
        <a href="{{ route('students.index') }}">← Back to Students</a>
        <a href="{{ route('home') }}">Home</a>
    </div>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="{{ old('fname', $student->fname) }}" required>
        </div>
        
        <div>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value="{{ old('lname', $student->lname) }}" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" required>
        </div>
        
        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
</body>
</html> 