<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProjectCategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function()
{
   return View::make('pages.about');
});

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
    Route::get('deleted/{cat_id}', [ProjectController::class, 'deleted'])->name('dashboard.deleted');




    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('{all}', function(){
        return view('dashboard');
    })->where(['all' => '.*']);

});



Route::get('locale/{lang}',[LocaleController::class,'setLocale']);