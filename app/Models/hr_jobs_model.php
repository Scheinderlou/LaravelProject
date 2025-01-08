<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr_jobs_model extends Model
{
    use HasFactory;

    protected $table = 'hr_jobs';
    protected $fillable = ['job_title', 'base_salary'];
    public $timestamps = false;
}
