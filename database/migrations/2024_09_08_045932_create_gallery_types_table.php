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
        if(!Schema::hasTable('gallery_types'))
        {
            Schema::create('gallery_types', function (Blueprint $table)
            {
                $table->id();
                $table->string('type_name', 100);
                $table->tinyInteger('type_serial');
                $table->enum('type_status', ['Show', 'Hide'])->default('Show');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_types');
    }
};