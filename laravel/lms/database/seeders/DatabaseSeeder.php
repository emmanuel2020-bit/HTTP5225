<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create sample professors
        $professor1 = \App\Models\Professor::create([
            'name' => 'Dr. John Smith',
            'email' => 'john.smith@university.edu',
            'department' => 'Computer Science'
        ]);

        $professor2 = \App\Models\Professor::create([
            'name' => 'Dr. Sarah Johnson',
            'email' => 'sarah.johnson@university.edu',
            'department' => 'Mathematics'
        ]);

        $professor3 = \App\Models\Professor::create([
            'name' => 'Dr. Michael Brown',
            'email' => 'michael.brown@university.edu',
            'department' => 'Physics'
        ]);

        // Create sample courses
        $course1 = \App\Models\Course::create([
            'name' => 'Introduction to Programming',
            'description' => 'Learn the basics of programming with Python',
            'professor_id' => $professor1->id
        ]);

        $course2 = \App\Models\Course::create([
            'name' => 'Calculus I',
            'description' => 'Fundamental concepts of calculus',
            'professor_id' => $professor2->id
        ]);

        $course3 = \App\Models\Course::create([
            'name' => 'Quantum Mechanics',
            'description' => 'Introduction to quantum physics',
            'professor_id' => $professor3->id
        ]);

        // Create sample students
        $student1 = \App\Models\Student::create([
            'fname' => 'Alice',
            'lname' => 'Wilson',
            'email' => 'alice.wilson@student.edu'
        ]);

        $student2 = \App\Models\Student::create([
            'fname' => 'Bob',
            'lname' => 'Davis',
            'email' => 'bob.davis@student.edu'
        ]);

        $student3 = \App\Models\Student::create([
            'fname' => 'Carol',
            'lname' => 'Miller',
            'email' => 'carol.miller@student.edu'
        ]);

        // Enroll students in courses
        $student1->courses()->attach([$course1->id, $course2->id]);
        $student2->courses()->attach([$course1->id, $course3->id]);
        $student3->courses()->attach([$course2->id, $course3->id]);
    }
}
