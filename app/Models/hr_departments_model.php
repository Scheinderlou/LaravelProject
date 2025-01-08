<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr_departments_model extends Model
{
    use HasFactory;

    protected $table = 'hr_departments';
    protected $fillable = ['department_name'];
    public $timestamps = false;
}
