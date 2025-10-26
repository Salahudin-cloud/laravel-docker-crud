<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index() : view
    {
        $departments = DB::table('departments')->get();


        return view('department.departmentView', ['departments' => $departments]);
    }
    public function newDepartmentForm() :View {
        return view('department.departmentAddView');
    }

    public function storeNewDepartment(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'code' => 'required|unique:departments|max:10',
            'name' => 'required|unique:departments|max:100',
            'head' => 'required|unique:departments|max:100',
        ]);

        Department::create($validated);

        return redirect('/department')->with('success', 'Berhasil menambahkan jurusan baru!');
    }

}
