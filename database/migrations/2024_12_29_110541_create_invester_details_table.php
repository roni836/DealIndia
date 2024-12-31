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
        Schema::create('invester_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Personal Details
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('religion')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->nullable();

            // Banking Details
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('micr_number')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->enum('account_type', ['Savings', 'Current'])->nullable();

            // Address Details
            $table->string('street_address')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();

            // Document Details
            $table->string('photo')->nullable();
            $table->string('aadhar_card')->nullable();
            $table->string('aadhar_card_number')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('pan_card_number')->nullable();

            // Custom Labels
            // $table->string('label1_name')->nullable();
            // $table->string('label1_image')->nullable();
            // $table->string('label2_name')->nullable();
            // $table->string('label2_image')->nullable();
            // $table->string('label3_name')->nullable();
            // $table->string('label3_image')->nullable();
            // $table->string('label4_name')->nullable();
            // $table->string('label4_image')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invester_details');
    }
};
