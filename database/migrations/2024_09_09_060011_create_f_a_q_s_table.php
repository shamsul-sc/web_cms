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
        if(!Schema::hasTable('f_a_q_s'))
        {
            Schema::create('f_a_q_s', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('faq_cat_id');
                $table->text('question');
                $table->text('answer');
                $table->integer('position');
                $table->enum('status', ['Show', 'Hide'])->default('Show');
                $table->text('question_bn');
                $table->text('answer_bn');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_a_q_s');
    }
};