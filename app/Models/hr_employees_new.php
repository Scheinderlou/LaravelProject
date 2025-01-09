<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr_employees_new extends Model
{
    use HasFactory;
    protected $table = 'hr_employees_new';
    protected $fillable = ['employee_id', 'name','date_of_birth','email','address','job_id','department'];
    public $timestamps = false;
}
