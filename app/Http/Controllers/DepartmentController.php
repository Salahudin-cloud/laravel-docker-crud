<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index(): view
    {
        $departments = Department::paginate(10);
        return view('department.departmentView', ['departments' => $departments]);
    }

    public function newDepartmentForm(): View
    {
        return view('department.departmentAddView');
    }

    public function updateDepartmentForm($id): View
    {
        $department = Department::findOrFail($id);

        return view('department.departmentUpdateView', ['department' => $department]);
    }

    public function storeNewDepartment(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'code' => 'required|unique:departments|max:10',
            'name' => 'required|unique:departments|max:100',
            'head' => 'required|unique:departments|max:100',
        ]);

        Department::create($validated);

        return redirect('/department')->with('success', 'Berhasil menambahkan jurusan baru!');
    }

    public function updateDepartment(Request $request, $id): RedirectResponse
    {
        $department = Department::findOrFail($id);
        $validated = $request->validate([
            'code' => [
                'required',
                'max:100',
                Rule::unique('departments')->ignore($id),
            ],
            'name' => [
                'required',
                'max:100',
                Rule::unique('departments')->ignore($id),
            ],
            'head' => [
                'required',
                'max:100',
                Rule::unique('departments')->ignore($id),
            ],
        ]);

        $department->update($validated);
        return redirect('/department')->with('success', 'Berhasil memperbarui jurusan!');
    }

    public function deleteDepartment($id): RedirectResponse
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect('/department')->with('success', 'Berhasil menghapus jurusan!');
    }
}
