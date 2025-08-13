@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">Edit Course</h1>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back to Courses
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('courses.update', $course) }}" method="post">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $course->name) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $course->description) }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="professor_id" class="form-label">Professor:</label>
                <select name="professor_id" id="professor_id" class="form-select" required>
                    <option value="">Select a Professor</option>
                    @foreach ($professors as $professor)
                        <option value="{{ $professor->id }}" {{ old('professor_id', $course->professor_id) == $professor->id ? 'selected' : '' }}>
                            {{ $professor->name }} - {{ $professor->department }}
                        </option>
                    @endforeach
                </select>
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
            
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-circle"></i> Update Course
            </button>
        </form>
    </div>
</div>
@endsection 