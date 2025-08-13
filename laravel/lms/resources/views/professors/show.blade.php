@extends('layouts.app')

@section('title', $professor->name)

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">{{ $professor->name }}</h1>
    <div>
        <a href="{{ route('professors.edit', $professor) }}" class="btn btn-warning">
            <i class="bi bi-pencil"></i> Edit
        </a>
        <a href="{{ route('professors.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Professors
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Professor Information</h5>
                <dl class="row">
                    <dt class="col-sm-4">Name:</dt>
                    <dd class="col-sm-8">{{ $professor->name }}</dd>
                    
                    <dt class="col-sm-4">Email:</dt>
                    <dd class="col-sm-8">{{ $professor->email }}</dd>
                    
                    <dt class="col-sm-4">Department:</dt>
                    <dd class="col-sm-8">{{ $professor->department }}</dd>
                </dl>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Teaching Course</h5>
                @if($professor->course)
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">{{ $professor->course->name }}</h6>
                            <p class="card-text">{{ $professor->course->description }}</p>
                            <a href="{{ route('courses.show', $professor->course) }}" class="btn btn-sm btn-outline-info">
                                <i class="bi bi-eye"></i> View Course
                            </a>
                        </div>
                    </div>
                @else
                    <p class="text-muted mb-0">No course assigned yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection 