<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
</head>
<body>
    <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('students.create') }}">Add New Student</a>
    </div>

    <h1>All Students</h1>

    @if($students->count() > 0)
        @foreach ($students as $student)
            <div>
                <div>
                    <strong>{{ $student->fname }} {{ $student->lname }}</strong> - {{ $student->email }}
                </div>
                <div>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <p>No students found.</p>
    @endif
</body>
</html> 