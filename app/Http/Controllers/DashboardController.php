<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index() : view
    {
        $students = Student::all();


        return view('dashboard', ['students' => $students]);
    }
}
