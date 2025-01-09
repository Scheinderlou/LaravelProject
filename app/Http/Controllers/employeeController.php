<?php

namespace App\Http\Controllers;

use App\Models\hr_employees_model;
use App\Models\hr_employees_new;
use DB;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function inJoin(Request $request)
    {
        $results=DB::table('hr_employees_new')
        ->join('hr_jobs', 'hr_employees_new.job_id', '=', 'hr_jobs.job_id')
        ->join('hr_departments', 'hr_employees_new.department_id', '=', "hr_departments.department_id")
        ->select('hr_employees_new.employee_id', 'hr_employees_new.name', 'hr_jobs.job_title', 'hr_departments.department_name')
        ->orderBy('employee_id')
        ->get();
        $jobs = DB::table('hr_jobs')->select('job_id', 'job_title')->get();
        $departments = DB::table('hr_departments')->select('department_id', 'department_name')->get();
        return view('human_resources.admin_page', compact('results', 'jobs', 'departments'));
    }
    public function showForm()
    {
        
        

        return view('admin_page', compact('jobs', 'departments'));
    }

    public function display(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|integer|unique:hr_employees_new,employee_id',
            'job_id' => 'required|exists:hr_jobs,job_id',
            'department' => 'required|exists:hr_departments,department_id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:hr_employees_new,email',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        DB::table('hr_employees_new')->insert([
            'employee_id' => $validatedData['employee_id'],
            'job_id' => $validatedData['job_id'],
            'department_id' => $validatedData['department'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'date_of_birth' => $validatedData['birthday'],
            'address' => $validatedData['address'],
        ]);

        // Insert data into the employee table
       /* DB::table('hr_employees_new')->insert([
            'employee_id' => $validatedData['employee_id'],
            'job_id' => $validatedData['job_id'],
            'department_id' => $validatedData['department'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'date_of_birth' => $validatedData['birthday'],
            'address' => $validatedData['address'],

        ]);*/

        return redirect()->back()->with('success', 'Employee added successfully!');
    }
    

    public function createEmployee(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|numeric|max:255',
            'job_id' => 'required|numeric|min:0',
            'name' => 'required|string',
            'email' =>'required|string',
            'department_id' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required'
        ]);
        hr_employees_new::create([
            'employee_id' => $request->input('employee_id'),
            'job_id' => $request->input('job_id'),
            'name' => $request->input('name'),
            'email' =>$request->input('email'),
            'department_id' => $request->input('department'),
            'date_of_birth' => $request->input('birthday'),
            'address' => $request->input('address'),
        ]);
        return redirect()->route('admin_page')->with('success', 'Added employee successfully!');
    }
}
