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
        if(!Schema::hasTable('media_coverages'))
        {
            Schema::create('media_coverages', function (Blueprint $table) {
                $table->id();
                $table->text('url');
                $table->string('media_name', 100);
                $table->string('media_logo', 100)->nullable();
                $table->string('coverage_title', 225);
                $table->text('coverage_text');
                $table->text('summary');
                $table->string('main_image', 100)->comment('Image must be 600x340 pixels');
                $table->string('main_image_title', 255)->nullable();
                $table->string('youtube_video_link', 255)
                    ->nullable()
                    ->comment('Hint: Please upload embed link like https://www.youtube.com/embed/OW0kUmsQHnU');
                $table->date('publish_date');
                $table->enum('status', ['Show', 'Hide'])->default('Hide');
                $table->enum('full_news_image', ['Show', 'Hide'])
                  ->nullable()
                  ->default(null)
                  ->comment('Image width must be 500 pixel');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_coverages');
    }
};
