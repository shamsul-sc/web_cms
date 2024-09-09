<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\frontend\WebProjectController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProjectCategoryController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function()
{
   return View::make('pages.about');
});
Route::get('/projects', [WebProjectController::class, 'projects']);



Route::resource('home-sliders', HomeSliderController::class);

Route::get('/home-sliders/{id}/edit', [HomeSliderController::class, 'edit'])->name('home-sliders.edit');
Route::post('/home-sliders/{id}', [HomeSliderController::class, 'update'])->name('home-sliders.update');

Route::prefix('dashboard')->group(function () {


    Route::get('/category_list', [ProjectCategoryController::class, 'category_list'])->name('dashboard.category_list');
    Route::get('/category_add', [ProjectCategoryController::class, 'category_add'])->name('dashboard.category_add');
    Route::post('/category_add', [ProjectCategoryController::class, 'category_insert'])->name('dashboard.category_insert');
    Route::get('/category_edit/{cat_id?}', [ProjectCategoryController::class, 'category_edit'])->name('dashboard.category_edit');
    Route::post('category_update/{cat_id?}', [ProjectCategoryController::class, 'category_update'])->name('dashboard.category_update');
    Route::get('category_deleted/{cat_id?}', [ProjectCategoryController::class, 'category_deleted'])->name('dashboard.category_deleted');

    //Project routes
    Route::get('/list', [ProjectController::class, 'project_list'])->name('dashboard.list');
    Route::get('/add', [ProjectController::class, 'project_add'])->name('dashboard.add');
    Route::post('/insert', [ProjectController::class, 'insert'])->name('dashboard.insert');
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('dashboard.edit');
    Route::post('update/{id}', [ProjectController::class, 'update'])->name('dashboard.update');
    Route::get('deleted/{id}', [ProjectController::class, 'deleted'])->name('dashboard.deleted');

    //CaseStudy routes
    Route::get('/case_study_list', [CaseStudyController::class, 'CaseStudy_list'])->name('dashboard.case_study_list');
    Route::get('/case_study_add', [CaseStudyController::class, 'CaseStudy_add'])->name('dashboard.case_study_add');
    Route::post('/case_study_insert', [CaseStudyController::class, 'CaseStudy_insert'])->name('dashboard.case_study_insert');
    Route::get('/case_study_edit/{id}', [CaseStudyController::class, 'CaseStudy_edit'])->name('dashboard.case_study_edit');
    Route::post('/case_study_update/{id}', [CaseStudyController::class, 'CaseStudy_update'])->name('dashboard.case_study_update');
    Route::get('/case_study_deleted/{id}', [CaseStudyController::class, 'CaseStudy_deleted'])->name('dashboard.case_study_deleted');

    //FollowUp routes
    Route::get('/follow_up_list', [FollowUpController::class, 'FollowUp_list'])->name('dashboard.follow_up_list');
    Route::get('/follow_up_add', [FollowUpController::class, 'FollowUp_add'])->name('dashboard.follow_up_add');
    Route::post('/follow_up_insert', [FollowUpController::class, 'FollowUp_insert'])->name('dashboard.follow_up_insert');
    Route::get('/follow_up_edit/{id}', [FollowUpController::class, 'FollowUp_edit'])->name('dashboard.follow_up_edit');
    Route::post('/follow_up_update/{id}', [FollowUpController::class, 'FollowUp_update'])->name('dashboard.follow_up_update');
    Route::get('/follow_up_deleted/{id}', [FollowUpController::class, 'FollowUp_deleted'])->name('dashboard.follow_up_deleted');




    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('{all}', function(){
        return view('dashboard');
    })->where(['all' => '.*']);

});



Route::get('locale/{lang}',[LocaleController::class,'setLocale']);