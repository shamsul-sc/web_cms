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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('project_id');
            $table->string('case_title_bn', 255);
            $table->string('case_title', 255)->nullable();
            $table->text('introduction_bn');
            $table->text('introduction')->nullable();
            $table->text('details_bn')->nullable();
            $table->text('details')->nullable();
            $table->text('case_summary_bn');
            $table->text('case_summary')->nullable();
            $table->integer('case_approx_budget')->nullable();
            $table->string('case_image', 255)
                  ->nullable()
                  ->comment('Please upload 600x340 pixels image');
            $table->unsignedBigInteger('album_id')->nullable();
            $table->string('case_pdf', 255)->nullable();
            $table->string('youtube_video_link', 255)
                  ->nullable()
                  ->comment('Hint: Please upload embed link like https://www.youtube.com/embed/OW0kUmsQHnU');
            $table->enum('urgent_case', ['No', 'Yes'])
                  ->default('No')
                  ->comment('urgent_case "Yes" have to be one at a time.');
            $table->enum('featured_case', ['No', 'Yes'])->default('No');
            $table->enum('state', ['Planning', 'Running', 'Finished'])->default('Planning');
            $table->boolean('is_delete')->default(false)->comment('0: Not Deleted, 1: Deleted');
            $table->timestamp('modified')->useCurrent()->useCurrentOnUpdate();

            // Foreign key constraint
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');

            // Optional: Add indexes for performance optimization
            $table->index('project_id');
            $table->index('album_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
