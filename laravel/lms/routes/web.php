<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/test', function () {
    return 'Laravel is working!';
});

Route::get('/', function () {
    return redirect()->route('students.index');
})->name('home');

Route::get('dashboard', function () {
    return redirect()->route('students.index');
})->name('dashboard');

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
