@extends('layouts.app')

@section('title', $course->name)

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">{{ $course->name }}</h1>
    <div>
        <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">
            <i class="bi bi-pencil"></i> Edit
        </a>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Courses
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Course Details</h5>
                <dl class="row">
                    <dt class="col-sm-3">Name:</dt>
                    <dd class="col-sm-9">{{ $course->name }}</dd>
                    
                    <dt class="col-sm-3">Description:</dt>
                    <dd class="col-sm-9">{{ $course->description }}</dd>
                    
                    <dt class="col-sm-3">Professor:</dt>
                    <dd class="col-sm-9">
                        @if($course->professor)
                            <a href="{{ route('professors.show', $course->professor) }}" class="text-decoration-none">
                                {{ $course->professor->name }} ({{ $course->professor->department }})
                            </a>
                        @else
                            <span class="text-muted">No professor assigned</span>
                        @endif
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Enrolled Students</h5>
                @if($course->students->count() > 0)
                    <ul class="list-group list-group-flush">
                        @foreach($course->students as $student)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $student->fname }} {{ $student->lname }}
                                <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-outline-info">
                                    <i class="bi bi-eye"></i> View
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted mb-0">No students enrolled yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 