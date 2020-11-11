<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('admin.employees.index',['employees' => $employees]);
    }

    public function create()
    {
        return view('admin.employees.form');
    }
    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        Employee::create($data);
        return redirect()->route('employees.index')->with('success',trans('general.created_Successfully'));;
    }
    public function show(Employee $employee)
    {
        return view('admin.employees.show',['employee' =>$employee]);
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.form',['employee' =>$employee]);
    }
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $employee->update($data);
        return redirect()->route('employees.index')->with('success',trans('general.updated_Successfully'));;
    }

}
