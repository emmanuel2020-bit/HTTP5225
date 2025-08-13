@extends('layouts.app')

@section('title', 'Add New Student')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">Add New Student</h1>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back to Students
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name:</label>
                <input type="text" name="lname" id="lname" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Select Courses:</label>
                <div class="row">
                    @foreach ($courses as $course)
                    <div class="col-md-6 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="courses[]" value="{{ $course->id }}" id="course_{{ $course->id }}">
                            <label class="form-check-label" for="course_{{ $course->id }}">
                                {{ $course->name }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Add Student
                </button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection