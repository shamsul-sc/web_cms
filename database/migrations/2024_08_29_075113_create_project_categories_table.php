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
        if(!Schema::hasTable('project_categories'))
        {
            Schema::create('project_categories', function (Blueprint $table) {

                $table->id();
                $table->string('category_name', 100)->nullable(false);
                $table->string('category_name_bn', 100)->nullable(false);
                $table->string('slug', 100)->nullable(false)->comment('use dash or underscore in between words');
                $table->tinyInteger('serial')->length(4)->nullable(false);
                $table->enum('status', ['show', 'hide'])->default('show')->nullable(false);
                $table->boolean('is_delete')->default(false)->comment('0: Not Deleted, 1: Deleted');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_categories');
    }
};