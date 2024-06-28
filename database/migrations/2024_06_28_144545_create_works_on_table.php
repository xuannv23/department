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
        Schema::create('works_on', function (Blueprint $table) {
            $table->unsignedInteger('emp_id');
            $table->unsignedInteger('prj_id');

            $table->primary(['emp_id', 'prj_id']);

            $table->foreign('emp_id')->references('emp_id')->on('employees')->onDelete('cascade');
            $table->foreign('prj_id')->references('prj_id')->on('projects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works_on');
    }
};
