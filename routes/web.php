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
use App\Http\Controllers\GalleryTypeController;
use App\Http\Controllers\GalleryAlbumController;
use App\Http\Controllers\GalleryPhotoController;
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


    //Gallery Type routes
    Route::get('/gallery_type_list', [GalleryTypeController::class, 'GalleryType_list'])->name('dashboard.gallery_type_list');
    Route::get('/gallery_type_add', [GalleryTypeController::class, 'GalleryType_add'])->name('dashboard.gallery_type_add');
    Route::post('/gallery_type_insert', [GalleryTypeController::class, 'GalleryType_insert'])->name('dashboard.gallery_type_insert');
    Route::get('/gallery_type_edit/{id}', [GalleryTypeController::class, 'GalleryType_edit'])->name('dashboard.gallery_type_edit');
    Route::post('/gallery_type_update/{id}', [GalleryTypeController::class, 'GalleryType_update'])->name('dashboard.gallery_type_update');
    Route::get('/gallery_type_deleted/{id}', [GalleryTypeController::class, 'GalleryType_deleted'])->name('dashboard.gallery_type_deleted');

    //Gallery Photo routes
    Route::get('/gallery_photo_list', [GalleryPhotoController::class, 'GalleryPhoto_list'])->name('dashboard.gallery_photo_list');
    Route::get('/gallery_photo_add', [GalleryPhotoController::class, 'GalleryPhoto_add'])->name('dashboard.gallery_photo_add');
    Route::post('/gallery_photo_insert', [GalleryPhotoController::class, 'GalleryPhoto_insert'])->name('dashboard.gallery_photo_insert');
    Route::get('/gallery_photo_edit/{id}', [GalleryPhotoController::class, 'GalleryPhoto_edit'])->name('dashboard.gallery_photo_edit');
    Route::post('/gallery_photo_update/{id}', [GalleryPhotoController::class, 'GalleryPhoto_update'])->name('dashboard.gallery_photo_update');
    Route::get('/gallery_photo_deleted/{id}', [GalleryPhotoController::class, 'GalleryPhoto_deleted'])->name('dashboard.gallery_photo_deleted');

    //Gallery Album routes
    Route::get('/gallery_album_list', [GalleryAlbumController::class, 'GalleryAlbum_list'])->name('dashboard.gallery_album_list');
    Route::get('/gallery_album_add', [GalleryAlbumController::class, 'GalleryAlbum_add'])->name('dashboard.gallery_album_add');
    Route::post('/gallery_album_insert', [GalleryAlbumController::class, 'GalleryAlbum_insert'])->name('dashboard.gallery_album_insert');
    Route::get('/gallery_album_edit/{id}', [GalleryAlbumController::class, 'GalleryAlbum_edit'])->name('dashboard.gallery_album_edit');
    Route::post('/gallery_album_update/{id}', [GalleryAlbumController::class, 'GalleryAlbum_update'])->name('dashboard.gallery_album_update');
    Route::get('/gallery_album_deleted/{id}', [GalleryAlbumController::class, 'GalleryAlbum_deleted'])->name('dashboard.gallery_album_deleted');




    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('{all}', function(){
        return view('dashboard');
    })->where(['all' => '.*']);

});



Route::get('locale/{lang}',[LocaleController::class,'setLocale']);