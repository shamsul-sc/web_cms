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
        if(!Schema::hasTable('follow_ups'))
        {
            Schema::create('follow_ups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id');
            $table->string('follow_up_title', 100)->nullable();
            $table->string('follow_up_title_bn', 100);
            $table->date('follow_up_date')->nullable();
            $table->text('details')->nullable();
            $table->text('details_bn');
            $table->string('follow_up_image', 255)->comment('Please upload 600x340 pixels image');
            $table->enum('status', ['Show', 'Hide'])->default('Show');
            $table->timestamps();
        });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_ups');
    }
};