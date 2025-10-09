<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function newStudentForm()
    {
        return view('students.create');
    }

    public function createNewStudent(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'student_number' => 'required|string|max:20|unique:students,student_number',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'gender'=> 'required', 
            'email' => 'required|email|unique',
            'phone_number' => 'required|string|max:20',
            'address' => 'nullable|string',
            'enrollment_year' => 'required|string|max:4',
            'date_of_birth' => 'nullable|date',
        ]);

        $student = new Student; 
        $student->student_name = $validatedData['student_number'];
        $student->first_name = $validatedData['first_name'];
        $student->last_name = $validatedData['last_name'];
        $student->gender = $validatedData['gender'];
        $student->email = $validatedData['email'];
        $student->phone_number = $validatedData['phone_number'];
        $student->address = $validatedData['address'];
        $student->enrollment_year = $validatedData['enrollment_year'];
        $student->date_of_birth = $validatedData['date_of_birth'];
        $student->save();
    }
}
