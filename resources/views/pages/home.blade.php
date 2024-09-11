<!-- home.blade.php -->

@extends('layouts.default')

@section('title', 'Home | Treatment Community Foundation')

@section('content')

@include('includes.slider')
@include('includes.projectCarouselWrapper')

<div class="container pt-3 pb-5 mt-3">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">প্রতিষ্ঠা ও প্রতিষ্ঠাতা</h2>
            <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">বাংলাদেশের রোগীদের তথ্য সংক্রান্ত সাহায্য ও সহযোগীতার সহজীকরণের লক্ষ্য নিয়ে ২০১৬ সালের ২২ নভেম্বর সোশ্যাল মিডিয়া ফেসবুক ভিত্তিক প্লাটফর্ম ট্রিটমেন্ট কমিউনিটি (TREATMENT COMMUNITY) এর যাত্রা শুরু হয়। ২০২২ সালের ২২ নভেম্বর গ্রুপের ৫ম বর্ষ পূর্তিতে 'ট্রিটমেন্ট কমিউনিটি ফাউন্ডেশন' (Treatment Community Foundation) নামে, একটি সামাজিক স্বেচ্ছাসেবী ও অলাভজনক সংগঠন হিসেবে আত্মপ্রকাশ করে।</p>
            <p class="positive-ls-3 text-color-grey mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">মোহামদ মনিরুল ইসলাম - প্রতিষ্ঠাতা</p>
        </div>
        <div class="col-md-9 col-lg-6 ps-lg-5">
            <div class="position-relative">
                <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                    <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                </div>
                <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                    <img src="{{ asset('img/team-1.jpg') }}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

@if($featuredProjects && $featuredProjects->count())
<section class="section overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(img/backgrounds/background-2.webp); background-size: cover; background-position: center;">
    <div class="container py-3 mb-5">
        <div class="row pb-5 mb-4">
            <div class="col text-center">
                <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Featured Projects</h3>
                <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Our Most Valuable Works</h2>
            </div>
        </div>
    </div>
</section>

<div class="owl-carousel-wrapper position-relative z-index-3 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" style="height: 373px; margin-top: -225px;">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 3}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': false, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 3000}">        
        @foreach ($featuredProjects as $project)
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="/uploads/category/thumbnail/{{ $project->project_image }}" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">
                            {{ app()->getLocale() == 'en' ? $project->project_title : $project->project_title_bn }}
                        </h2>
                        <!-- <p class="text-color-grey positive-ls-3 mb-3">CEO & FOUNDER</p> -->
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">{!! app()->getLocale() == 'en' ? $project->project_summary : $project->project_summary_bn !!}</p>
                        <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                            VIEW PROFILE
                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endif

<!-- <div class="container pb-5 my-3">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card bg-primary border-0 border-radius-0">
                <div class="card-body p-5">
                    <h3 class="d-block alternative-font-4 text-color-light font-weight-medium opacity-8 text-4 mb-0">ANY QUESTIONS?</h3>
                    <h2 class="text-color-light font-weight-bold text-9 pb-2 mb-4">Frequent Asked Questions</h2>

                    <div class="custom-seemore-overlay mb-4" style="max-height: 400px;">
                        <div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQOne">
                                            1- Why choose Porto Law?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQOne" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQTwo">
                                            2- Why do I need an attorney?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQTwo" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQFour">
                                            3- Cras a elit sit amet leo accumsan volutpa?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQFour" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQFive">
                                            4- Integer aliquet ullamcorper dolor?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQFive" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQSix">
                                            5- Efficitur felis ultrices non?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQSix" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQSeven">
                                            6- Efficitur sit a met non?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQSeven" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQEight">
                                            7- Efficitur felis ultrices non dolor sit?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQEight" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 pt-2">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="custom-seemore-overlay-button text-color-light text-5"><i class="fas fa-chevron-down position-relative z-index-1"></i></a>
                    </div>

                    <a href="demo-law-firm-2-contact.html" class="btn custom-btn-primary-darken font-weight-bold btn-px-5 btn-py-3">CONTACT US</a>
                </div>
            </div>
        </div>
        <div id="requestConsultation" class="col-lg-6 col-xl-5 offset-xl-1">
            <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 text-lg-end mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">LET'S TALK</h3>
            <h2 class="text-color-dark font-weight-bold text-9 text-lg-end pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Request Consultation</h2>

            <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your request has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your request.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>

                <div class="row">
                    <div class="form-group col mb-3">
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-3">
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-3">
                        <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-4">
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="9" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col text-lg-end mb-0">
                        <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" data-loading-text="Loading...">REQUEST CONSULTATION</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->

<section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url(img/demos/law-firm-2/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col text-center">
                <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">TESTIMONIALS</h2>
                <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Satisfied Reviews</h3>
                <p class="custom-font-secondary text-color-light custom-font-size-1 font-weight-extra-bold">“</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center px-lg-0">
                <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-light mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': false, 'autoplayTimeout': 7000}">
                    <div class="testimonial testimonial-style-2">
                        <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ ট্রিটমেন্ট কমিউনিটি ফাউন্ডেশন মানব সেবায় তার পদচিহ্ন রেখে যাবে বলে আমি বিশ্বাস করি। ”</p>
                        <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                            <hr class="my-4 mx-auto">
                        </div>
                        <div class="testimonial-author">
                            <div class="testimonial-author-thumbnail">
                                <img src="{{ asset('img/clients/client-1.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p>
                                <strong class="font-weight-extra-bold text-color-light">
                                    ডা. হাবিবুল্লাহ তালুকদার রাসকিন
                                </strong>
                                <span>
                                    প্রকল্প সমন্বয়কারী ও বিভাগীয় প্রধান, প্রিভেন্টিভ অনকোলজি, গণস্বাস্থ্য সমাজ ভিত্তিক ক্যান্সার হাসপাতাল
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="section section-height-3 bg-primary-darken border-0 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container py-3">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-3 text-center text-xl-start mb-5 mb-xl-0">
                <ul class="list list-unstyled d-lg-flex d-xl-block align-items-center justify-content-lg-center mb-0 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1600">
                    <li class="mb-lg-0 mb-xl-3">
                        <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
                        <a href="tel:0123456789" class="text-color-light font-weight-bold text-decoration-none text-5 hover-effect-2">(800) 123-4657</a>
                    </li>
                    <li class="mx-lg-5 mx-xl-0 mb-3 mb-lg-0 mb-xl-3">
                        <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                        <a href="mailto:porto@portotheme.com" class="text-color-light text-decoration-none text-4 hover-effect-2">porto@portotheme.com</a>
                    </li>
                    <li class="text-color-light text-4 mb-0">
                        <i class="icons icon-calendar text-color-primary text-5 position-relative top-3 me-2"></i>
                        Mon - Fri 9am - 6pm
                    </li>
                </ul>
            </div>
            <div class="col-xl-5 text-center mb-5 mb-xl-0">
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500">
                    <h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
                </div>
                <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="750">Experienced Attorneys?</h2>
                <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="950">
                    <p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
                </div>
            </div>
            <div class="col-xl-3 text-center text-xl-end">
                <a href="demo-law-firm-2-contact.html" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1600">REQUEST CONSULTATION</a>
            </div>
        </div>
    </div>
</section> -->

         
<div class="container pb-3 my-5">
    
    @if($featuredCases && $featuredCases->count())   
    <div class="row pb-2 mb-4">
        <div class="col text-center">
            <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">FEATURED CASES</h3>
            <h2 class="text-transform-none text-color-dark font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Success Stories</h2>
        </div>
    </div>
    <div class="row">
        <div class="col appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
            <div class="custom-carousel-style-2 owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'loop': false, 'nav': false, 'dots': true, 'margin': 25, 'stagePadding': 25, 'autoplay': false, 'autoplayTimeout': 7000}">
                @foreach ($featuredCases as $case)
                <div class="pb-5">
                    <a href="demo-law-firm-2-case-study-detail.html" class="text-decoration-none">
                        <div class="card custom-card-style-2 border-0 border-radius-0">
                            <div class="card-img-top">
                                <img src="/uploads/case_image/thumbnail/{{ $case->case_image }}" class="img-fluid" alt="" />
                            </div>
                            <div class="card-body">
                                <!-- <span class="d-block text-color-grey positive-ls-2 mb-0">{{ app()->getLocale() == 'en' ? $case->case_title_bn : $case->case_title_bn }}</span> -->
                                <h4 class="text-color-dark font-weight-medium text-5-5 mb-2"><em>{{ app()->getLocale() == 'en' ? $case->case_title_bn : $case->case_title_bn }}</em></h4>
                                <span class="custom-read-more font-weight-medium d-inline-flex justify-content-center align-items-center svg-fill-color-primary svg-stroke-color-primary">
                                    VIEW DETAILS
                                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>    
    @endif

    @if($galleryPhotos && $galleryPhotos->count()) 
    <div class="row pt-2 pb-2 mb-4">
        <div class="col text-center">
            <!-- <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">FEATURED CASES</h3> -->
            <h2 class="text-transform-none text-color-dark font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300">Our Activities</h2>
        </div>
    </div>    
    <div class="row">
        <div class="col">
            <div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': true, 'margin': 20}">
                @foreach ($galleryPhotos as $photo)
                <div>
                    <img class="img-fluid" src="{{ asset('uploads/gallery_photo/thumbnail/' . $photo->image) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

</div>

<!-- <section class="section parallax bg-transparent border-0 py-0 m-0" data-plugin-parallax data-image-src="img/demos/law-firm-2/backgrounds/background-3.jpg" data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 8, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}">
    <div class="d-flex justify-content-center">
        <div class="scrollable-parallax-wrapper overflow-hidden">
            <div class="container custom-container-style-1 custom-container-position-1 py-5 my-5 mx-0">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 text-center">
                        <p class="custom-font-secondary text-9 text-color-light line-height-3 opacity-9 mb-0">"Happiness is the meaning and the purpose of life, the whole aim and end of human existence."</p>
                        <div class="d-inline-block divider divider-primary divider-small my-4">
                            <hr class="my-0">
                        </div>
                        <strong class="d-block text-color-light line-height-1 text-4">- Aristotle</strong>
                        <p class="text-color-light opacity-3 text-2 mb-0">(Greek Philosopher)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <div class="container py-5 my-5">
    <div class="row mb-5">
        <div class="col text-center">
            <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">OUR BLOG</h3>
            <h2 class="text-transform-none text-color-dark font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">News & Articles</h2>
        </div>
    </div>
    <div class="row row-gutter-sm pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <article>
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-img-top">
                        <a href="demo-law-firm-2-blog-post.html">
                            <img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/law-firm-2/blog/blog-1.jpg" alt="Card Image">
                        </a>
                    </div>
                    <div class="card-body bg-light p-4 z-index-1">
                        <p class="text-uppercase text-color-default text-1 mb-1 pt-1">
                            <time pubdate datetime="2023-01-10">10 Jan 2023</time> 
                            <span class="opacity-3 d-inline-block px-2">|</span> 
                            3 Comments 
                            <span class="opacity-3 d-inline-block px-2">|</span> 
                            John Doe
                        </p>
                        <div class="card-body p-0">
                            <h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="demo-law-firm-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
                            <a href="demo-law-firm-2-blog-post.html" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0">
            <article>
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-img-top">
                        <a href="demo-law-firm-2-blog-post.html">
                            <img class="card-img-top border-radius-0 hover-effect-2" src="img/demos/law-firm-2/blog/blog-2.jpg" alt="Card Image">
                        </a>
                    </div>
                    <div class="card-body bg-light p-4 z-index-1">
                        <p class="text-uppercase text-color-default text-1 mb-1 pt-1">
                            <time pubdate datetime="2023-01-10">10 Jan 2023</time> 
                            <span class="opacity-3 d-inline-block px-2">|</span> 
                            3 Comments 
                            <span class="opacity-3 d-inline-block px-2">|</span> 
                            John Doe
                        </p>
                        <div class="card-body p-0">
                            <h4 class="card-title alternative-font-4 font-weight-semibold text-5 mb-3"><a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3" href="demo-law-firm-2-blog-post.html">Lorem ipsum dolor sit a met</a></h4>
                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...</p>
                            <a href="demo-law-firm-2-blog-post.html" class="custom-read-more-link d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none svg-fill-color-primary svg-stroke-color-primary ps-0">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="row">
        <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" data-plugin-options="{'accY': -250}">
            <a href="demo-law-firm-2-blog.html" class="btn btn-primary font-weight-bold px-5 btn-py-3">VIEW BLOG</a>
        </div>
    </div>
</div> -->

@stop