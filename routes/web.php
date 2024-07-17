<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\HomeSliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function()
{
   return View::make('pages.about');
});


Route::resource('home-sliders', HomeSliderController::class);

Route::get('/home-sliders/{id}/edit', [HomeSliderController::class, 'edit'])->name('home-sliders.edit');
Route::post('/home-sliders/{id}', [HomeSliderController::class, 'update'])->name('home-sliders.update');

Route::prefix('dashboard')->group(function () {
    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('{all}', function(){
        return view('dashboard');
    })->where(['all' => '.*']);
});

