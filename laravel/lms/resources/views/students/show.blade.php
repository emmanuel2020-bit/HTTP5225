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

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
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
</div>
@endsection