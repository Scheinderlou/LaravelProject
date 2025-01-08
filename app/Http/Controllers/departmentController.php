<?php

namespace App\Http\Controllers;

use App\Models\hr_departments_model;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    public function addDepartment(Request $request)
    {
        
        $request->validate([
            'department_name' => 'required|string|max:255',
        ]);
        
        hr_departments_model::create([
            'department_name' => $request->input('department_name'),
        ]);

        
        return redirect()->back()->with('success', 'Department added successfully!');
    }
}
