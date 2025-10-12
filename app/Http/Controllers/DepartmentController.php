<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function newDepartmentForm() :View {
        return view('department.departmentAddView');
    }
}
