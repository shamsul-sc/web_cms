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
        if(!Schema::hasTable('gallery_photos'))
        {
            Schema::create('gallery_photos', function (Blueprint $table)
            {
                $table->id();
                $table->unsignedBigInteger('album_id');
                $table->string('caption', 255)->nullable();
                $table->string('image', 255);
                $table->tinyInteger('serial');
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
        Schema::dropIfExists('gallery_photos');
    }
};