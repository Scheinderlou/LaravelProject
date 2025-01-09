<?php

namespace App\Http\Controllers;

use App\Models\hr_employees_model;
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

        return view('human_resources.admin_page', compact('results'));
    }
}
