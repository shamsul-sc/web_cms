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
        if(!Schema::hasTable('testimonials'))
        {
            Schema::create('testimonials', function (Blueprint $table) {
                $table->id();
                $table->text('content');
                $table->string('author_name', 255);
                $table->string('author_image', 255)->nullable()->comment('Upload square size image ');
                $table->string('designation', 50)->nullable();
                $table->string('company_name', 50)->nullable();
                $table->string('company_url', 50)->default('Null');
                $table->tinyInteger('serial');
                $table->enum('status', ['Show', 'Hide'])->default('Show')->nullable();
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};