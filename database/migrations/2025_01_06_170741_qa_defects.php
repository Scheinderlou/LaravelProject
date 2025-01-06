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
        Schema::create('qa_defects', function (Blueprint $table) {
            $table->id('defect_id');
            $table->unsignedBigInteger('check_id');
            $table->string('severity');
            $table->string('resolution');

            $table->foreign('check_id')->references('check_id')->on('qa_quality_checks')->onDelete('cascade');

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
