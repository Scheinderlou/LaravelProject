<?php

namespace App\Http\Controllers;

use App\Models\hr_departments_model;
use App\Models\hr_jobs_model;
use Illuminate\Http\Request;
//Controller
class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }
    public function user()
    {
        return view('users.user');
    }
    public function admin()
    {
        return view('pages.admin');
    }
    public function dashboard_qa()
    {
        return view('pages.dashboard_qa');
    }
    public function admin_page()
    {
        return view('human_resources.admin_page');
    }
    public function payroll_page()
    {
        return view('human_resources.payroll_page');
    }
    public function view_page()
    {
        return view('human_resources.view_page');
    }
    public function edit_page()
    {
        return view('human_resources.edit_page');
    }
    public function job_page()
    {
        $jobs = hr_jobs_model::all();
        return view('human_resources.job_page', compact('jobs'));
    }
    public function department_page()
    {
        $departments = hr_departments_model::all();
        return view('human_resources.department_page', compact('departments'));
    }
}
