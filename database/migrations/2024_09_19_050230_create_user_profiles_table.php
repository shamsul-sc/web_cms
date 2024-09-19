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
        if(!Schema::hasTable('user_profiles'))
        {
            Schema::create('user_profiles', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('user_id');
                $table->unsignedBigInteger('member_type_id')->nullable();
                $table->string('father_name')->nullable();
                $table->string('mother_name')->nullable();
                $table->string('blood_group')->nullable();
                $table->text('present_address')->nullable();
                $table->text('profile_image')->nullable();
                $table->string('nid_number')->nullable();
                $table->enum('gender', ['Male', 'Female', 'Others'])->nullable();
                $table->date('date_of_birth')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
