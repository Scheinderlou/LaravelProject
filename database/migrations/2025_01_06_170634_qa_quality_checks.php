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
        Schema::create('qa_quality_checks', function (Blueprint $table) {
            $table->id('check_id');
            $table->integer('product_id');
            $table->unsignedBigInteger('protocol_id');
            $table->date('check_date');
            $table->unsignedBigInteger('tester_id');
            $table->string('status');
            $table->text('comments');

            $table->foreign('protocol_id')->references('protocol_id')->on('qa_testing_protocols')->onDelete('cascade');
            $table->foreign('tester_id')->references('employee_id')->on('hr_employees')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qa_quality_checks');
    }
};
