<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function newStudentForm() : View
    {
        return view('student.studentAddView');
    }

    public function createNewStudent(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'student_number' => 'required|string|max:20|unique:students,student_number',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'gender' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone_number' => 'required|string|max:20',
            'address' => 'nullable|string',
            'enrollment_year' => 'required|string|max:4',
            'date_of_birth' => 'nullable|date',
        ]);

        Student::create($validatedData);

        return redirect("/")->with('success', 'Student Added Successfully');
    }
}
