<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Professor;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('professor')->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professors = Professor::all();
        return view('courses.create', compact('professors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'professor_id' => 'required|exists:professors,id',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->professor_id = $request->professor_id;
        $course->save();
        
        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $professors = Professor::all();
        return view('courses.edit', compact('course', 'professors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'professor_id' => 'required|exists:professors,id',
        ]);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->professor_id = $request->professor_id;
        $course->save();
        
        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
   }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
