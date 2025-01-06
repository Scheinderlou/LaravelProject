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
        Schema::create('hr_payroll', function (Blueprint $table) {
            $table->integer('payroll_id'); 
            $table->integer('employee_id');
            $table->decimal('deductions');
            $table->decimal('bonuses');
            $table->decimal('netpay');
            $table->date('payment_date');
            $table->string('status');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
