<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller
class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
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
}
