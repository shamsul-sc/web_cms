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

        if(!Schema::hasTable('projects'))
        {
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('cat_id');
                $table->string('project_title', 255);
                $table->string('slug', 100)
                    ->comment('Use small letter and underscore. If project title "KFH Spondon" then slug will be kfh_spondon');
                $table->string('project_title_bn', 255);
                $table->enum('joint_project', ['No', 'Yes'])->default('No')
                    ->comment('KFH project with other organization');
                $table->unsignedBigInteger('user_id')->nullable()->comment('Project Chairman');
                $table->text('introduction');
                $table->text('introduction_bn');
                $table->text('details');
                $table->text('details_bn');
                $table->text('project_summary');
                $table->text('project_summary_bn');
                $table->integer('project_approx_budget');
                $table->string('project_image', 255)
                    ->comment('Please upload 600x340 pixels image');
                $table->unsignedBigInteger('album_id')->nullable();
                $table->string('project_pdf', 255)->nullable();
                $table->string('youtube_video_link', 255)
                    ->comment('Hint: Please upload embed link like https://www.youtube.com/embed/OW0kUmsQHnU');
                $table->enum('featured_project', ['No', 'Yes'])->default('No');
                $table->enum('state', ['Planning', 'Running', 'Finished'])->default('Planning');
                $table->enum('status', ['Show', 'Hide'])->default('Show');
                $table->tinyInteger('serial');
                $table->boolean('is_delete')->default(false)->comment('0: Not Deleted, 1: Deleted');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
