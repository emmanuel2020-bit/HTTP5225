# Laravel LMS (Learning Management System)

## Final Submission - Week 12 & 13 Assessment

This is a complete Learning Management System built with Laravel, implementing the required relationships and CRUD operations.

## 🎯 Requirements Completed

### ✅ Many-to-Many Relationship: Students ↔ Courses

- Students can enroll in multiple courses
- Courses can have multiple students
- Course selection available when adding/editing students
- Enrollment management with proper validation

### ✅ One-to-One Relationship: Professor ↔ Course

- Each course is taught by exactly one professor
- Each professor teaches exactly one course
- Professor assignment when creating/editing courses
- Professor information displayed in course views

### ✅ Complete CRUD Operations

- **Students**: Create, Read, Update, Delete with course enrollment
- **Courses**: Create, Read, Update, Delete with professor assignment
- **Professors**: Create, Read, Update, Delete with course teaching

## 🚀 Features

### Student Management

- Add new students with personal information
- Enroll students in multiple courses
- View student details with enrolled courses
- Edit student information and course enrollments
- Delete students (with cascade deletion of enrollments)

### Course Management

- Create courses with descriptions
- Assign professors to courses
- View course details with professor and enrolled students
- Edit course information and professor assignment
- Delete courses (with cascade deletion of enrollments)

### Professor Management

- Add professors with department information
- Assign courses to professors
- View professor details with teaching course
- Edit professor information
- Delete professors (with cascade deletion of courses)

## 🏗️ Database Structure

### Tables

- `students` - Student information (fname, lname, email)
- `courses` - Course information (name, description, professor_id)
- `professors` - Professor information (name, email, department)
- `course_student` - Pivot table for many-to-many relationship

### Relationships

- **Student** ↔ **Course**: Many-to-Many (through `course_student`)
- **Professor** ↔ **Course**: One-to-One (professor teaches one course)

## 🎨 UI/UX Features

- **Bootstrap 5.3.2** for modern, responsive design
- **Bootstrap Icons** for better visual communication
- **Responsive tables** that work on all devices
- **Card-based layouts** for clean information display
- **Form validation** with error handling
- **Confirmation dialogs** for destructive actions
- **Navigation bar** with easy access to all sections

## 📱 Pages & Views

### Students

- **Index**: List all students with enrolled courses
- **Create**: Add new student with course selection
- **Show**: Student details with enrolled courses
- **Edit**: Modify student information and course enrollments

### Courses

- **Index**: List all courses with professor and student count
- **Create**: Add new course with professor assignment
- **Show**: Course details with professor and enrolled students
- **Edit**: Modify course information and professor assignment

### Professors

- **Index**: List all professors with teaching course
- **Create**: Add new professor
- **Show**: Professor details with teaching course
- **Edit**: Modify professor information

## 🛠️ Installation & Setup

1. **Clone the repository**

    ```bash
    git clone <your-repo-url>
    cd laravel/lms
    ```

2. **Install dependencies**

    ```bash
    composer install
    ```

3. **Environment setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Database configuration**

    - Update `.env` with your database credentials
    - Run migrations: `php artisan migrate`
    - Seed sample data: `php artisan db:seed`

5. **Start the application**
    ```bash
    php artisan serve
    ```

## 🔧 Technical Implementation

### Controllers

- `StudentController` - Manages student CRUD and course enrollments
- `CourseController` - Manages course CRUD and professor assignment
- `ProfessorController` - Manages professor CRUD

### Models

- `Student` - Student model with course relationships
- `Course` - Course model with professor and student relationships
- `Professor` - Professor model with course relationship

### Views

- Bootstrap-styled Blade templates
- Responsive design for all screen sizes
- Consistent navigation and layout

### Database Migrations

- Proper foreign key constraints
- Cascade deletion for referential integrity
- Unique constraints to prevent duplicates

## 📸 Screenshots Required for Submission

Please take screenshots of the following pages and add them to your GitHub repository:

1. **Students Index Page** - Showing list of students with enrolled courses
2. **Student Create Page** - Form with course selection checkboxes
3. **Student Show Page** - Student details with enrolled courses
4. **Student Edit Page** - Edit form with pre-selected courses
5. **Courses Index Page** - List of courses with professor and student count
6. **Course Create Page** - Form with professor selection dropdown
7. **Course Show Page** - Course details with professor and enrolled students
8. **Course Edit Page** - Edit form with professor selection
9. **Professors Index Page** - List of professors with teaching course
10. **Professor Create Page** - Add professor form
11. **Professor Show Page** - Professor details with teaching course
12. **Professor Edit Page** - Edit professor form

## 🎓 Assessment Criteria

This submission demonstrates:

- ✅ **Complete CRUD operations** for all entities
- ✅ **Many-to-many relationship** between students and courses
- ✅ **One-to-one relationship** between professor and course
- ✅ **Course selection** when adding students
- ✅ **Professional UI/UX** with Bootstrap styling
- ✅ **Proper validation** and error handling
- ✅ **Database integrity** with proper relationships
- ✅ **Responsive design** for all devices

## 🚀 Future Enhancements

- User authentication and authorization
- Course scheduling and time management
- Grade tracking and reporting
- File uploads for course materials
- Email notifications for enrollments
- Advanced search and filtering
- API endpoints for mobile applications

---

**GitHub Repository**: [Your Repository Link]
**Student Name**: [Your Name]
**Course**: [Course Code]
**Week**: 12 & 13 Final Assessment
