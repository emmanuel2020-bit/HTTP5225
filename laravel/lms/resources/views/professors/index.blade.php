@extends('layouts.app')

@section('title', 'All Professors')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2">All Professors</h1>
    <div>
        <a href="{{ route('professors.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Professor
        </a>
        <a href="{{ route('courses.index') }}" class="btn btn-info">
            <i class="bi bi-book"></i> View Courses
        </a>
    </div>
</div>

@if($professors->count() > 0) 
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Teaching Course</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professors as $professor)
                        <tr>
                            <td>{{ $professor->name }}</td>
                            <td>{{ $professor->email }}</td>
                            <td>{{ $professor->department }}</td>
                            <td>
                                @if($professor->course)
                                    <span class="badge bg-success">{{ $professor->course->name }}</span>
                                @else
                                    <span class="text-muted">No course assigned</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('professors.edit', $professor) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <a href="{{ route('professors.show', $professor) }}" class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <form method="POST" action="{{ route('professors.destroy', $professor) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this professor?')">
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
    <i class="bi bi-info-circle"></i> No professors found.
</div>
@endif
@endsection 