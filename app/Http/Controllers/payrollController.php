<?php

namespace App\Http\Controllers;

use App\Models\hr_payroll_new;
use DB;
use Illuminate\Http\Request;

class payrollController extends Controller
{

    public function showPayrolls()
{
    
$payrolls = DB::table('hr_payroll_new')
->join('hr_employees_new', 'hr_payroll_new.employee_id', '=', 'hr_employees_new.employee_id') // Replace 'id' with the correct column name
->select('hr_payroll_new.*', 'hr_employees_new.name as employee_name')
->get();

    return view('human_resources.view_page', compact('payrolls'));
}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'payroll_id' => 'required|unique:hr_payroll_new',
            'employee_id' => 'required|exists:hr_employees_new,employee_id',
            'deductions' => 'required|numeric|min:0',
            'bonuses' => 'required|numeric|min:0',
            'netpay' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
        ]);
    
        // Add a default status if not provided
        $validatedData['status'] = $request->input('status', 'pending');
    
        hr_payroll_new::create($validatedData);
    
        return redirect()->back()->with('success', 'Payroll record created successfully!');

    }
}