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
        if(!Schema::hasTable('faq_categories'))
        {
            Schema::create('faq_categories', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('faq_cat_id');
                $table->string('faq_cat_name', 100);
                $table->string('faq_cat_name_bn', 100);
                $table->tinyInteger('faq_cat_serial');
                $table->enum('faq_cat_status', ['Show', 'Hide'])->default('Hide');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_categories');
    }
};