<?php

use App\Http\Controllers\HomeSliderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home-sliders', HomeSliderController::class);

Route::prefix('dashboard')->group(function () {
    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('{all}', function(){
        return view('dashboard');
    })->where(['all' => '.*']);
});

