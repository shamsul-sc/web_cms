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
        if(!Schema::hasTable('member_types'))
        {
            Schema::create('member_types', function (Blueprint $table) {
                $table->id();
                $table->string('member_type');
                $table->integer('serial');
                $table->enum('status', ['show', 'hide'])->default('show');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_types');
    }
};