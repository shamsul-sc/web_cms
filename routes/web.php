<?php

// use Artisan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\GalleryTypeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GalleryAlbumController;
use App\Http\Controllers\GalleryPhotoController;
use App\Http\Controllers\MediaCoverageController;
use App\Http\Controllers\frontend\webFAQController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\frontend\webAlbumsController;
use App\Http\Controllers\frontend\webProjectController;
use App\Http\Controllers\frontend\WebCaseStudyController;

// Route::get('/cache', function()
// {
//     Artisan::call('cache:clear');
//     \Artisan::call('config:clear');
//     \Artisan::call('route:clear');
//    return "ok";
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function()
{
   return View::make('pages.about');
});

Route::get('/project/categories', [webProjectController::class, 'projectCategories']);
Route::get('/project/category/{slug}', [webProjectController::class, 'categoryCaseStudies']);
Route::get('/projects', [webProjectController::class, 'projects']);
Route::get('/joint-projects', [webProjectController::class, 'jointProjects']);
Route::get('/project/{slug}', [webProjectController::class, 'project']);

Route::get('/case-studies', [WebCaseStudyController::class, 'caseStudies'])->name('caseStudies');
Route::get('/case-study/{id}', [WebCaseStudyController::class, 'caseStudyDetails'])->name('caseStudyDetails');

Route::get('/albums', [webAlbumsController::class, 'albums'])->name('albums');

Route::get('/faqs', [webFAQController::class, 'faqs'])->name('faqs');

Route::resource('home-sliders', HomeSliderController::class);

Route::get('/home-sliders/{id}/edit', [HomeSliderController::class, 'edit'])->name('home-sliders.edit');
Route::post('/home-sliders/{id}', [HomeSliderController::class, 'update'])->name('home-sliders.update');

Route::prefix('dashboard')->group(function () {

    Route::get('/category_list', [ProjectCategoryController::class, 'category_list'])->name('dashboard.category_list');
    Route::get('/category_add', [ProjectCategoryController::class, 'category_add'])->name('dashboard.category_add');
    Route::post('/category_add', [ProjectCategoryController::class, 'category_insert'])->name('dashboard.category_insert');
    Route::get('/category_edit/{id?}', [ProjectCategoryController::class, 'category_edit'])->name('dashboard.category_edit');
    Route::post('category_update/{id?}', [ProjectCategoryController::class, 'category_update'])->name('dashboard.category_update');
    Route::get('category_deleted/{id?}', [ProjectCategoryController::class, 'category_deleted'])->name('dashboard.category_deleted');

    //Project routes
    Route::get('/list', [ProjectController::class, 'project_list'])->name('dashboard.list');
    Route::get('/add', [ProjectController::class, 'project_add'])->name('dashboard.add');
    Route::post('/insert', [ProjectController::class, 'insert'])->name('dashboard.insert');
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('dashboard.edit');
    Route::post('update/{id}', [ProjectController::class, 'update'])->name('dashboard.update');
    Route::delete('deleted/{id}', [ProjectController::class, 'deleted'])->name('dashboard.deleted');

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

     //FAQ category routes
    Route::get('/faq_category_list', [FaqCategoryController::class, 'FaqCategory_list'])->name('dashboard.faq_category_list');
    Route::get('/faq_category_add', [FaqCategoryController::class, 'FaqCategory_add'])->name('dashboard.faq_category_add');
    Route::post('/faq_category_insert', [FaqCategoryController::class, 'FaqCategory_insert'])->name('dashboard.faq_category_insert');
    Route::get('/faq_category_edit/{id}', [FaqCategoryController::class, 'FaqCategory_edit'])->name('dashboard.faq_category_edit');
    Route::post('/faq_category_update/{id}', [FaqCategoryController::class, 'FaqCategory_update'])->name('dashboard.faq_category_update');
    Route::get('/faq_category_deleted/{id}', [FaqCategoryController::class, 'FaqCategory_deleted'])->name('dashboard.faq_category_deleted');

    //FAQ routes
    Route::get('/faq_list', [FAQController::class, 'Faq_list'])->name('dashboard.faq_list');
    Route::get('/faq_add', [FAQController::class, 'Faq_add'])->name('dashboard.faq_add');
    Route::post('/faq_insert', [FAQController::class, 'Faq_insert'])->name('dashboard.faq_insert');
    Route::get('/faq_edit/{id}', [FAQController::class, 'Faq_edit'])->name('dashboard.faq_edit');
    Route::post('/faq_update/{id}', [FAQController::class, 'Faq_update'])->name('dashboard.faq_update');
    Route::get('/faq_deleted/{id}', [FAQController::class, 'Faq_deleted'])->name('dashboard.faq_deleted');


     //Testimonial routes
    Route::get('/testimonial_list', [TestimonialController::class, 'Testimonial_list'])->name('dashboard.testimonial_list');
    Route::get('/testimonial_add', [TestimonialController::class, 'Testimonial_add'])->name('dashboard.testimonial_add');
    Route::post('/testimonial_insert', [TestimonialController::class, 'Testimonial_insert'])->name('dashboard.testimonial_insert');
    Route::get('/testimonial_edit/{id}', [TestimonialController::class, 'Testimonial_edit'])->name('dashboard.testimonial_edit');
    Route::post('/testimonial_update/{id}', [TestimonialController::class, 'Testimonial_update'])->name('dashboard.testimonial_update');
    Route::get('/testimonial_deleted/{id}', [TestimonialController::class, 'Testimonial_deleted'])->name('dashboard.testimonial_deleted');

     //MediaCoverage routes
    Route::get('/media_cover_list', [MediaCoverageController::class, 'MediaCoverage_list'])->name('dashboard.media_cover_list');
    Route::get('/media_cover_add', [MediaCoverageController::class, 'MediaCoverage_add'])->name('dashboard.media_cover_add');
    Route::post('/media_cover_insert', [MediaCoverageController::class, 'MediaCoverage_insert'])->name('dashboard.media_cover_insert');
    Route::get('/media_cover_edit/{id}', [MediaCoverageController::class, 'MediaCoverage_edit'])->name('dashboard.media_cover_edit');
    Route::post('/media_cover_update/{id}', [MediaCoverageController::class, 'MediaCoverage_update'])->name('dashboard.media_cover_update');
    Route::get('/media_cover_deleted/{id}', [MediaCoverageController::class, 'MediaCoverage_deleted'])->name('dashboard.media_cover_deleted');

    Route::get('/', function(){
        return view('dashboard');
    });

    Route::get('{all}', function(){
        return view('dashboard');
    })->where(['all' => '.*']);

});



Route::get('locale/{lang}',[LocaleController::class,'setLocale']);