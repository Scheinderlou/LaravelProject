<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller
class PagesController extends Controller
{
    public function admin()
    {
        return view('pages.admin');
    }
    public function dashboard_qa()
    {
        return view('pages.dashboard_qa');
    }
    public function employees_hr()
    {
        return view('human_resources.employees_hr');
    }
    public function home_hr()
    {
        return view('human_resources.home_hr');
    }
    public function payroll_hr()
    {
        return view('human_resources.payroll_hr');
    }
    public function payroll_view()
    {
        return view('human_resources.payroll_view');
    }
}
