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
        Schema::table('home_sliders', function (Blueprint $table) {
            $table->string('button_url')->nullable()->change();
            $table->string('alt_tag')->nullable()->change();
            $table->string('button_text')->nullable()->change();
            $table->string('button_url')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_sliders', function (Blueprint $table) {
            $table->string('button_url')->nullable(false)->change();
            $table->string('alt_tag')->nullable(false)->change();
            $table->string('button_text')->nullable(false)->change();
            $table->string('button_url')->nullable(false)->change();
        });
    }
};
