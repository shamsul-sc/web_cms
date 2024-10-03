<?php

// use Artisan;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\backend_auth\UserAuthController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\EcMemberController;
use App\Http\Controllers\EcPositionController;
use App\Http\Controllers\EcSerialController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\frontend\WebAlbumsController;
use App\Http\Controllers\frontend\WebCaseStudyController;
use App\Http\Controllers\frontend\WebFAQController;
use App\Http\Controllers\frontend\WebMemberController;
use App\Http\Controllers\frontend\WebProjectController;
use App\Http\Controllers\GalleryAlbumController;
use App\Http\Controllers\GalleryPhotoController;
use App\Http\Controllers\GalleryTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MediaCoverageController;
use App\Http\Controllers\MemberTypeController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserImportkController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;








// Route::get('/cache', function()
// {
//     Artisan::call('cache:clear');
//     \Artisan::call('config:clear');
//     \Artisan::call('route:clear');
//    return "ok";
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function()
{
   return View::make('pages.about');
});

Route::get('/project/categories', [WebProjectController::class, 'projectCategories']);
Route::get('/project/category/{slug}', [WebProjectController::class, 'categoryCaseStudies']);
Route::get('/projects', [WebProjectController::class, 'projects']);
Route::get('/joint-projects', [WebProjectController::class, 'jointProjects']);
Route::get('/project/{slug}', [WebProjectController::class, 'project']);

Route::get('/case-studies', [WebCaseStudyController::class, 'caseStudies'])->name('caseStudies');
Route::get('/case-study/{id}', [WebCaseStudyController::class, 'caseStudyDetails'])->name('caseStudyDetails');

Route::get('/albums', [WebAlbumsController::class, 'albums'])->name('albums');

Route::get('/general-member', [WebMemberController::class, 'member'])->name('member');
Route::get('/general-member', [WebMemberController::class, 'member'])->name('member.search');


Route::get('/faqs', [WebFAQController::class, 'faqs'])->name('faqs');

Route::resource('home-sliders', HomeSliderController::class);





Route::get('/home-sliders/{id}/edit', [HomeSliderController::class, 'edit'])->name('home-sliders.edit');
Route::post('/home-sliders/{id}', [HomeSliderController::class, 'update'])->name('home-sliders.update');

Route::prefix('dashboard')->group(function () {


    Route::get('/', function(){
        return view('dashboard', ['usevite' => true]);
    })->name('dashboard');

    Route::get('{all}', function(){
        return view('dashboard',data: ['usevite' => true]);
    })->where(['all' => '.*']);

});

//Auth routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name( 'auth.register');
Route::post('register', [RegisterController::class, 'register'])->name('auth.register_insert');
Route::get('login',  [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::post('login', [LoginController::class, 'login'])->name('auth.login_insert');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPassForm'])->name('auth.forgot_password');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('auth.forgot_password');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password/{token}', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

        Route::group(['middleware' => 'admin'],  function () {

            Route::resource('ec-position', EcPositionController::class );
            Route::resource('ec-serial', EcSerialController::class );
            Route::resource('ec-member', EcMemberController::class );

            //User Auth routes
            Route::get('/users',[UserAuthController::class, 'UserList'])->name('backend_auth.user_list');
            Route::get('/users-details/{id}',[UserAuthController::class, 'UserDetails'])->name( 'dashboard.users_details');
            Route::get('/user-activate/{id}',[UserAuthController::class, 'UserActivate'])->name( 'dashboard.user_activate');
            Route::get('/user-block/{id}',[UserAuthController::class, 'UserBlock'])->name( 'dashboard.user_block');
            Route::get('/users-profile_edit/{id}',[UserAuthController::class, 'UserProfileEdit'])->name(name: 'dashboard.users_profile_edit');
            Route::post('/users-profile_edit/{id}',  [UserAuthController::class, 'UserProfileUpdated'])->name('dashboard.users_profile_updated');


            Route::get('/users-import',  [UserImportkController::class, 'showUserImport'])->name('dashboard.users_import');
            Route::post('/users-import', [UserImportkController::class, 'userImport'])->name('dashboard.upload');


            //MediaCoverage routes
            Route::get('/media-cover-list', [MediaCoverageController::class, 'MediaCoverage_list'])->name('dashboard.media_cover_list');
            Route::get('/media-cover-add', [MediaCoverageController::class, 'MediaCoverage_add'])->name('dashboard.media_cover_add');
            Route::post('/media-cover-insert', [MediaCoverageController::class, 'MediaCoverage_insert'])->name('dashboard.media_cover_insert');
            Route::get('/media-cover-edit/{id}', [MediaCoverageController::class, 'MediaCoverage_edit'])->name('dashboard.media_cover_edit');
            Route::post('/media-cover-update/{id}', [MediaCoverageController::class, 'MediaCoverage_update'])->name('dashboard.media_cover_update');
            Route::delete('/media-cover-deleted/{id}', [MediaCoverageController::class, 'MediaCoverage_deleted'])->name('dashboard.media_cover_deleted');

            //Member Type routes

            Route::get('/member-type-list', [MemberTypeController::class, 'MemberType_list'])->name('dashboard.member_type_list');
            Route::get('/member-type-add', [MemberTypeController::class, 'MemberType_add'])->name('dashboard.member_type_add');
            Route::post('/member-type-add', [MemberTypeController::class, 'MemberType_insert'])->name('dashboard.member_type_insert');
            Route::get('/member-type-edit/{id}', [MemberTypeController::class, 'MemberType_edit'])->name('dashboard.member_type_edit');
            Route::post('/member-type-update/{id}', [MemberTypeController::class, 'MemberType_update'])->name('dashboard.member_type_update');
            Route::delete('/member-type-deleted/{id}', [MemberTypeController::class, 'MemberType_deleted'])->name('dashboard.member_type_deleted');

            //Project category

            Route::get('/category-list', [ProjectCategoryController::class, 'category_list'])->name('dashboard.category_list');
            Route::get('/category-add', [ProjectCategoryController::class, 'category_add'])->name('dashboard.category_add');
            Route::post('/category-add', [ProjectCategoryController::class, 'category_insert'])->name('dashboard.category_insert');
            Route::get('/category-edit/{id?}', [ProjectCategoryController::class, 'category_edit'])->name('dashboard.category_edit');
            Route::post('category-update/{id?}', [ProjectCategoryController::class, 'category_update'])->name('dashboard.category_update');
            Route::delete('category-deleted/{id?}', [ProjectCategoryController::class, 'category_deleted'])->name('dashboard.category_deleted');

            //Project routes
            Route::get('/project-list', [ProjectController::class, 'project_list'])->name('dashboard.project_list');
            Route::get('/project-add', [ProjectController::class, 'project_add'])->name('dashboard.project_add');
            Route::post('/project-add', [ProjectController::class, 'insert'])->name('dashboard.project_insert');
            Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->name('dashboard.project_edit');
            Route::post('/project-update/{id}', [ProjectController::class, 'update'])->name('dashboard.project_update');
            Route::delete('/project-deleted/{id}', [ProjectController::class, 'deleted'])->name('dashboard.project_deleted');

            //CaseStudy routes
            Route::get('/case-study-list', [CaseStudyController::class, 'CaseStudy_list'])->name('dashboard.case_study_list');
            Route::get('/case-study-add', [CaseStudyController::class, 'CaseStudy_add'])->name('dashboard.case_study_add');
            Route::post('/case-study-insert', [CaseStudyController::class, 'CaseStudy_insert'])->name('dashboard.case_study_insert');
            Route::get('/case-study-edit/{id}', [CaseStudyController::class, 'CaseStudy_edit'])->name('dashboard.case_study_edit');
            Route::post('/case-study-update/{id}', [CaseStudyController::class, 'CaseStudy_update'])->name('dashboard.case_study_update');
            Route::delete('/case-study-deleted/{id}', [CaseStudyController::class, 'CaseStudy_deleted'])->name('dashboard.case_study_deleted');

            //FollowUp routes
            Route::get('/follow-up-list', [FollowUpController::class, 'FollowUp_list'])->name('dashboard.follow_up_list');
            Route::get('/follow-up-add', [FollowUpController::class, 'FollowUp_add'])->name('dashboard.follow_up_add');
            Route::post('/follow-up-insert', [FollowUpController::class, 'FollowUp_insert'])->name('dashboard.follow_up_insert');
            Route::get('/follow-up-edit/{id}', [FollowUpController::class, 'FollowUp_edit'])->name('dashboard.follow_up_edit');
            Route::post('/follow-up-update/{id}', [FollowUpController::class, 'FollowUp_update'])->name('dashboard.follow_up_update');
            Route::delete('/follow-up-deleted/{id}', [FollowUpController::class, 'FollowUp_deleted'])->name('dashboard.follow_up_deleted');


            //Gallery Type routes
            Route::get('/gallery-type-list', [GalleryTypeController::class, 'GalleryType_list'])->name('dashboard.gallery_type_list');
            Route::get('/gallery-type-add', [GalleryTypeController::class, 'GalleryType_add'])->name('dashboard.gallery_type_add');
            Route::post('/gallery-type-insert', [GalleryTypeController::class, 'GalleryType_insert'])->name('dashboard.gallery_type_insert');
            Route::get('/gallery-type-edit/{id}', [GalleryTypeController::class, 'GalleryType_edit'])->name('dashboard.gallery_type_edit');
            Route::post('/gallery-type-update/{id}', [GalleryTypeController::class, 'GalleryType_update'])->name('dashboard.gallery_type_update');
            Route::delete('/gallery-type-deleted/{id}', [GalleryTypeController::class, 'GalleryType_deleted'])->name('dashboard.gallery_type_deleted');

            //Gallery Photo routes
            Route::get('/gallery-photo-list', [GalleryPhotoController::class, 'GalleryPhoto_list'])->name('dashboard.gallery_photo_list');
            Route::get('/gallery-photo-add', [GalleryPhotoController::class, 'GalleryPhoto_add'])->name('dashboard.gallery_photo_add');
            Route::post('/gallery-photo-insert', [GalleryPhotoController::class, 'GalleryPhoto_insert'])->name('dashboard.gallery_photo_insert');
            Route::get('/gallery-photo-edit/{id}', [GalleryPhotoController::class, 'GalleryPhoto_edit'])->name('dashboard.gallery_photo_edit');
            Route::post('/gallery-photo-update/{id}', [GalleryPhotoController::class, 'GalleryPhoto_update'])->name('dashboard.gallery_photo_update');
            Route::delete('/gallery-photo-deleted/{id}', [GalleryPhotoController::class, 'GalleryPhoto_deleted'])->name('dashboard.gallery_photo_deleted');

            //Gallery Album routes
            Route::get('/gallery-album-list', [GalleryAlbumController::class, 'GalleryAlbum_list'])->name('dashboard.gallery_album_list');
            Route::get('/gallery-album-add', [GalleryAlbumController::class, 'GalleryAlbum_add'])->name('dashboard.gallery_album_add');
            Route::post('/gallery-album-insert', [GalleryAlbumController::class, 'GalleryAlbum_insert'])->name('dashboard.gallery_album_insert');
            Route::get('/gallery-album-edit/{id}', [GalleryAlbumController::class, 'GalleryAlbum_edit'])->name('dashboard.gallery_album_edit');
            Route::post('/gallery-album-update/{id}', [GalleryAlbumController::class, 'GalleryAlbum_update'])->name('dashboard.gallery_album_update');
            Route::delete('/gallery-album-deleted/{id}', [GalleryAlbumController::class, 'GalleryAlbum_deleted'])->name('dashboard.gallery_album_deleted');

            //FAQ category routes
            Route::get('/faq-category-list', [FaqCategoryController::class, 'FaqCategory_list'])->name('dashboard.faq_category_list');
            Route::get('/faq-category-add', [FaqCategoryController::class, 'FaqCategory_add'])->name('dashboard.faq_category_add');
            Route::post('/faq-category-insert', [FaqCategoryController::class, 'FaqCategory_insert'])->name('dashboard.faq_category_insert');
            Route::get('/faq-category-edit/{id}', [FaqCategoryController::class, 'FaqCategory_edit'])->name('dashboard.faq_category_edit');
            Route::post('/faq-category-update/{id}', [FaqCategoryController::class, 'FaqCategory_update'])->name('dashboard.faq_category_update');
            Route::delete('/faq-category-deleted/{id}', [FaqCategoryController::class, 'FaqCategory_deleted'])->name('dashboard.faq_category_deleted');

            //FAQ routes
            Route::get('/faq-list', [FAQController::class, 'Faq_list'])->name('dashboard.faq_list');
            Route::get('/faq-add', [FAQController::class, 'Faq_add'])->name('dashboard.faq_add');
            Route::post('/faq-insert', [FAQController::class, 'Faq_insert'])->name('dashboard.faq_insert');
            Route::get('/faq-edit/{id}', [FAQController::class, 'Faq_edit'])->name('dashboard.faq_edit');
            Route::post('/faq-update/{id}', [FAQController::class, 'Faq_update'])->name('dashboard.faq_update');
            Route::delete('/faq-deleted/{id}', [FAQController::class, 'Faq_deleted'])->name('dashboard.faq_deleted');


            //Testimonial routes
            Route::get('/testimonial-list', [TestimonialController::class, 'Testimonial_list'])->name('dashboard.testimonial_list');
            Route::get('/testimonial-add', [TestimonialController::class, 'Testimonial_add'])->name('dashboard.testimonial_add');
            Route::post('/testimonial-insert', [TestimonialController::class, 'Testimonial_insert'])->name('dashboard.testimonial_insert');
            Route::get('/testimonial-edit/{id}', [TestimonialController::class, 'Testimonial_edit'])->name('dashboard.testimonial_edit');
            Route::post('/testimonial-update/{id}', [TestimonialController::class, 'Testimonial_update'])->name('dashboard.testimonial_update');
            Route::delete('/testimonial-deleted/{id}', [TestimonialController::class, 'Testimonial_deleted'])->name('dashboard.testimonial_deleted');

            // Route::resource('users', EcPositionController::class)->names([
            //     // 'index' => 'backend_auth.user_list',
            //     // 'show' => 'dashboard.users_details',
            //     // 'edit' => 'dashboard.users_profile_edit',
            //     // 'update' => 'dashboard.users_profile_updated',

            // ]);



        });

        Route::group(['middleware' => 'user'],  function () {

             //User Auth routes
            // Route::get('/users',[UserAuthController::class, 'UserList'])->name('backend_auth.user_list');
            // Route::get('/users-details/{id}',[UserAuthController::class, 'UserDetails'])->name( 'dashboard.users_details');
            // Route::get('/user-activate/{id}',[UserAuthController::class, 'UserActivate'])->name('dashboard.user_activate');
            // Route::get('/user-block/{id}',[UserAuthController::class, 'UserBlock'])->name(name: 'dashboard.user_block');
            // Route::get('/users-profile_edit/{id}',[UserAuthController::class, 'UserProfileEdit'])->name('dashboard.users_profile_edit');
            // Route::post('/users-profile_edit/{id}',  [UserAuthController::class, 'UserProfileUpdated'])->name('dashboard.users_profile_updated');


        });
        Route::group(['middleware' => 'stuff'],  function () {

        });

    });


Route::get('locale/{lang}',[LocaleController::class,'setLocale']);