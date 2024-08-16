<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable(); // Contact number
            $table->text('address')->nullable(); // Address
            $table->string('profile_picture')->nullable(); // Profile picture path
            $table->date('date_of_birth')->nullable(); // Date of birth
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Gender
            $table->date('enrollment_date')->nullable(); // Enrollment date
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status
            $table->string('parent_guardian_name')->nullable(); // Parent/Guardian name
            $table->string('parent_guardian_phone')->nullable(); // Parent/Guardian contact number
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}