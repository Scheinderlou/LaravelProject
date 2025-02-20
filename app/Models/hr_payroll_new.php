<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr_payroll_new extends Model
{
    use HasFactory;
    protected $table = 'hr_payroll_new';
    protected $fillable = ['payroll_id', 'employee_id', 'deductions', 'bonuses', 'netpay', 'payment_date', 'status'];
    public $timestamps=false;
}
