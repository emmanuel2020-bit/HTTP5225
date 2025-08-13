@extends('layouts.app')

@section('title', 'Add New Professor')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">Add New Professor</h1>
    <a href="{{ route('professors.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Back to Professors
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('professors.store') }}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            
            <div class="mb-3">
                <label for="department" class="form-label">Department:</label>
                <input type="text" name="department" id="department" class="form-control" value="{{ old('department') }}" required>
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
                    <i class="bi bi-plus-circle"></i> Add Professor
                </button>
                <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection 