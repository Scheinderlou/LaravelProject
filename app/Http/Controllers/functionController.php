<?php

namespace App\Http\Controllers;

use App\Models\hr_jobs_model;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class functionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'base_salary' => 'required|numeric|min:0',
        ]);

        hr_jobs_model::create([
            'job_title' => $request->job_title,
            'base_salary' => $request->base_salary,
        ]);

        return redirect()->route('job_page')->with('success', 'Job added successfully!');
    }
}
