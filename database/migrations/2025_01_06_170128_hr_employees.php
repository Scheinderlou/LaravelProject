<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hr_employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('address');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('department_id');

            $table->foreign('job_id')->references('job_id')->on('hr_jobs')->onDelete('cascade');
            $table->foreign('department_id')->references('department_id')->on('hr_departments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('hr_employees');
    }
};
