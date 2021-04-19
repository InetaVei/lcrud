<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        return view('employees.index', ['employees' => \App\Models\Employee::orderBy('employee_surname')->get()]);
    }

    public function create()
    {
        $projects = \App\Models\Project::orderBy('project_name')->get();
        return view('employees.create', ['projects' => $projects]);
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index');
    }
    public function show(Employee $employee)
    {
        //
    }
    public function edit(Employee $employee)
    {
        $projects = \App\Models\Project::orderBy('project_name')->get();
        return view('Employees.edit', ['employee' => $employee, 'projects' => $projects]);
    }
    public function update(Request $request, Employee $employee)
    {
        $employee->fill($request->all());
        $employee->save();
        return redirect()->route('employees.index');
    }
    public function destroy(Employee $employee, Request $request)
    {
        $employee->delete();
        return redirect()->route('employees.index', ['project_id' => $request->input('project_id')]);
    }
}
