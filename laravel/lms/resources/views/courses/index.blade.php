@extends('layouts.app')

@section('title', 'All Courses')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">All Courses</h1>
    <div>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Course
        </a>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Students
        </a>
    </div>
</div>

@if($courses->count() > 0) 
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Professor</th>
                        <th>Enrolled Students</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ Str::limit($course->description, 100) }}</td>
                            <td>
                                @if($course->professor)
                                    <span class="badge bg-info">{{ $course->professor->name }}</span>
                                @else
                                    <span class="text-muted">No professor</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-secondary">{{ $course->students->count() }} students</span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <form method="POST" action="{{ route('courses.destroy', $course) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this course?')">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
<div class="alert alert-info" role="alert">
    <i class="bi bi-info-circle"></i> No courses found.
</div>
@endif
@endsection 