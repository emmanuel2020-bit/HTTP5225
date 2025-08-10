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

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">Course Details</h5>
                <dl class="row">
                    <dt class="col-sm-3">Name:</dt>
                    <dd class="col-sm-9">{{ $course->name }}</dd>
                    
                    <dt class="col-sm-3">Description:</dt>
                    <dd class="col-sm-9">{{ $course->description }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection 