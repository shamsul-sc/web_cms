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
        if(!Schema::hasTable('ec_members'))
        {
            Schema::create('ec_members', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger( 'ec_id');
                $table->unsignedBigInteger('ec_position_id');
                $table->unsignedBigInteger( 'user_id');
                $table->tinyInteger('serial');
                $table->enum('status', ['Show', 'Hide'])->default('Show');
                $table->foreign('ec_id')->references('id')->on('ec_serials')->onDelete('cascade');
                $table->foreign('ec_position_id')->references('id')->on('ec_positions')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ec_members');
    }
};