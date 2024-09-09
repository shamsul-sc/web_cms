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
        if(!Schema::hasTable('gallery_albums'))
        {
            Schema::create('gallery_albums', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('type_id');
                $table->string('album_name', 255);
                $table->date('date');
                $table->string('venue', 255);
                $table->tinyInteger('album_serial');
                $table->enum('album_status', ['Show', 'Hide'])->default('Show');
                $table->string('featured_image', 255)->comment('upload 600x340 pixels image');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_albums');
    }
};