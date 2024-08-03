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
            $table->string('slider_text_top_bn', 255)->nullable()->after('slider_text_top');
            $table->string('slider_text_last_bn', 255)->nullable()->after('slider_text_last');
            $table->string('button_text_bn', 255)->nullable()->after('button_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_sliders', function (Blueprint $table) {
            $table->dropColumn('slider_text_top_bn');
            $table->dropColumn('slider_text_last_bn');
            $table->dropColumn('button_text_bn');
        });
    }
};
