<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::paginate()
        ]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255'
        ]);

        Employee::create($data);

        return back()->with('message', 'Employee created successfully');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255'
        ]);

        $employee->update($data);

        return back()->with('message', 'Employee updated.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back()->with('message', 'Employee deleted.');
    }
}
