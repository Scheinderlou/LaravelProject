<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controller
class PagesController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function dashboard_qa()
    {
        return view('dashboard_qa');
    }
    public function dashboard_hr()
    {
        return view('dashboard_hr');
    }
}
