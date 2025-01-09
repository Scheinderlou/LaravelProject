<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function showCount()
    {
        // Replace 'employees' with your table name
        $employeeCount = DB::table('hr_employees')->count();

        return view('pages.admin', compact('employeeCount'));
    }
}
