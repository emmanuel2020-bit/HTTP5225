@extends('layouts.app')

@section('title', $student->fname . ' ' . $student->lname)

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">Student Details</h1>
    <div>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
            <i class="bi bi-pencil"></i> Edit Student
        </a>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Students
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Student Information</h5>
                <dl class="row">
                    <dt class="col-sm-4">First Name:</dt>
                    <dd class="col-sm-8">{{ $student->fname }}</dd>
                    
                    <dt class="col-sm-4">Last Name:</dt>
                    <dd class="col-sm-8">{{ $student->lname }}</dd>
                    
                    <dt class="col-sm-4">Email:</dt>
                    <dd class="col-sm-8">{{ $student->email }}</dd>
                </dl>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Enrolled Courses</h5>
                @if($student->courses->count() > 0)
                    <ul class="list-group list-group-flush">
                        @foreach($student->courses as $course)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $course->name }}
                                <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-outline-info">
                                    <i class="bi bi-eye"></i> View
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted mb-0">No courses enrolled yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection