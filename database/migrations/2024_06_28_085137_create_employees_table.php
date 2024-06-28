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
        Schema::create('employees', function (Blueprint $table) {
            $table->integerIncrements('emp_id'); // Tự động tăng và kiểu integer
            $table->string('emp_name');
            $table->string('emp_gender');
            $table->string('emp_add');
            $table->date('emp_dob');
            $table->date('emp_doj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
