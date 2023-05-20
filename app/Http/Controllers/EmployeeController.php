<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employeeForm()
    {
        
        $employees = Employee::get();
        $greetings = 'Welcome azee';



        return view('employees.create', ['employees' => $employees, 'greetings' => $greetings]);
    }


    public function employeeSubmit(Request $request)
    {
        $firstName = $request->input('first_name');
        $middleName = $request->input('middle_name');
        $lastName = $request->input('last_name');

        $data = [
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName
        ];

        Employee::create($data);

        return back();
    }

    public function show($id)
    {

        $employee = Employee::find($id);

        return $employee->first_name;
    }




}
