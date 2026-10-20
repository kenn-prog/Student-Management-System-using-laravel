<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * read: display all student
     */
    public function index()
    {
        $students = Student ::latest()->get();

        return view('students.index', compact('students'));
    }

    /**
     * create: Show the form
     */
    public function create()
    {
        return view ('students.create');
    }

    /**
     * create :Save a new student
     */
    public function store(Request $request)
    {
        $validated = $request ->validate([
            'student_number' => 'required|string|max:50|unique:student,student_number',
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'course' => 'required|string|max:255',
        ]);

        Student::create($validate);
        return redirect()->route('students.index')->with('success','Student added successfully!');
    }

    /**
     * read:Display the specified student
     */
    public function show(string $id)
    {
        return view ('students.show',compact('student'));
    }

    /**
     * update:show the edit form
     */
    public function edit(string $id)
    {
        return view ('students.edit',compact('student'));
    }

    /**
     * Update :save changes
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request ->validate([
            'student_number'=>[
                'required',
                'string',
                'max:50',
                Rule::unique('students','student_number')->ignore($student->id)
            ],
            'first_name' => 'required|string|max:255',
            'last_name' => ' required|string|max:255',
            'email'=> [
                'required',
                'string',
                'max:255',
                Rule::unique('students', 'email')->ignore($student->id),
            ],
            'course'=> 'required|string|max:255',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success','Student updated successfully!');
    }

    /**
     * Delete: remove a student
     */
    public function destroy(string $id)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success','Student deleted successfully!');
    }
}
