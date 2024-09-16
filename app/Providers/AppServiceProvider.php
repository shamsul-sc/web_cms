<?php

namespace App\Providers;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $categories = ProjectCategory::getRecord();
            $view->with('projectCategories', $categories);

            $projects = Project::where('status', 'Show')->orderBy('serial')->get();
            $view->with('projects', $projects);

            Paginator::useBootstrap();


        });
    }

}