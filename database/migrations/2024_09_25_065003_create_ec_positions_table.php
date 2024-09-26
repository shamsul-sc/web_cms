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
        if(!Schema::hasTable('ec_positions')){
            Schema::create('ec_positions', function (Blueprint $table) {
                $table->id();
                $table->string('position_name', 255);
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
        Schema::dropIfExists('ec_positions');
    }
};