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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slider_text_top');
            $table->string('slider_text_middle');
            $table->string('slider_text_last');
            $table->string('image');
            $table->string('alt_tag');
            $table->string('button_text');
            $table->string('button_url');
            $table->integer('position');
            $table->enum('status', ['show', 'hide']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sliders');
    }
};
