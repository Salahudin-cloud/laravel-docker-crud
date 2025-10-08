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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("student_number",20)->unique();
            $table->string("first_name",100); 
            $table->string("last_name",100);
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER'])->nullable();
            $table->string('email')->unique();
            $table->string("phone_number",20); 
            $table->string("address")->nullable();
            $table->string("enrollment_year"); 
            $table->date('date_of_birth')->nullable();

            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
