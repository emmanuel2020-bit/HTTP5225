@extends('layouts.app')

@section('title', 'Add New Course')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">Add New Course</h1>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back to Courses
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('courses.store') }}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
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
                <i class="bi bi-plus-circle"></i> Add Course
            </button>
        </form>
    </div>
</div>
@endsection 