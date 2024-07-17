<!-- home.blade.php -->

@extends('layouts.default')

@section('title', 'Home | Treatment Community Foundation')

@section('content')

@include('includes.slider')
@include('includes.projectCarouselWrapper')

<div class="container py-5 mt-3">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Global Service Provided By Exceptional Attorneys</em></h2>
            <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum.</p>
            <p class="positive-ls-3 text-color-grey mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">JOHN DOE - CEO & FOUNDER</p>
            <img src="img/demos/law-firm-2/signature.png" class="img-fluid appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" alt="" />
        </div>
        <div class="col-md-9 col-lg-6 ps-lg-5">
            <div class="position-relative">
                <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                    <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                </div>
                <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                    <img src="img/demos/law-firm-2/generic/generic-1.jpg" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="my-5">

<div class="container">
    <div class="row align-items-center text-center py-5 my-5">
        <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
            <img src="img/logos/logo-8.png" alt class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="600" data-plugin-options="{'accY': -250}" style="max-width: 90px;" />
        </div>
        <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
            <img src="img/logos/logo-9.png" alt class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -250}" style="max-width: 140px;" />
        </div>
        <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
            <img src="img/logos/logo-10.png" alt class="img-fluid appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200" data-plugin-options="{'accY': -250}" style="max-width: 140px;" />
        </div>
        <div class="col-sm-4 col-xl-2 mb-5 mb-md-0">
            <img src="img/logos/logo-11.png" alt class="img-fluid appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="200" data-plugin-options="{'accY': -250}" style="max-width: 140px;" />
        </div>
        <div class="col-sm-4 col-xl-2 mb-5 mb-md-0">
            <img src="img/logos/logo-12.png" alt class="img-fluid appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="400" data-plugin-options="{'accY': -250}" style="max-width: 100px;" />
        </div>
        <div class="col-sm-4 col-xl-2">
            <img src="img/logos/logo-13.png" alt class="img-fluid appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="600" data-plugin-options="{'accY': -250}" style="max-width: 100px;" />
        </div>
    </div>
</div>

<section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url(img/demos/law-firm-2/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col text-center">
                <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">TESTIMONIALS & REVIEWS</h2>
                <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Satisfied Client Stories</h3>
                <p class="custom-font-secondary text-color-light custom-font-size-1 font-weight-extra-bold">“</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center px-lg-0">
                <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-light mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': false, 'autoplayTimeout': 7000}">
                    <div>
                        <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Cras a elit sit a met leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fils utlricies non. Integer aliquet ullamcorper. ”</p>
                        <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                            <hr class="my-4 mx-auto">
                        </div>
                        <strong class="d-block text-color-light text-4 mb-4">- John Doe, Los Angeles, CA</strong>
                    </div>
                    <div>
                        <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Cras a elit sit a met leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fils utlricies non. Integer aliquet ullamcorper. ”</p>
                        <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                            <hr class="my-4 mx-auto">
                        </div>
                        <strong class="d-block text-color-light text-4 mb-4">- John Doe, Los Angeles, CA</strong>
                    </div>
                    <div>
                        <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">“ Cras a elit sit a met leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fils utlricies non. Integer aliquet ullamcorper. ”</p>
                        <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                            <hr class="my-4 mx-auto">
                        </div>
                        <strong class="d-block text-color-light text-4 mb-4">- John Doe, Los Angeles, CA</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="row counters counters-sm py-5">
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="50" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                    <label class="text-color-light font-weight-bold text-4 mb-0">Business Year</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="240" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                    <label class="text-color-light font-weight-bold text-4 mb-0">Satiesfied Clients</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                <div class="counter">
                    <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="2000" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                    <label class="text-color-light font-weight-bold text-4 mb-0">Successfull Cases</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="counter">
                    <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="20" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                    <label class="text-color-light font-weight-bold text-4 mb-0">Professional Attorneys</label>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-3">
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
</div>

<section class="section overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
    <div class="container py-5 mb-5">
        <div class="row pb-5 mb-4">
            <div class="col text-center">
                <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">ATTORNEYS & PARTNERS</h3>
                <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Our Legal Team</h2>
            </div>
        </div>
    </div>
</section>

<div class="owl-carousel-wrapper position-relative z-index-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" style="height: 373px; margin-top: -225px;">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="img/demos/law-firm-2/team/team-1.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">John Doe</h2>
                        <p class="text-color-grey positive-ls-3 mb-3">CEO & FOUNDER</p>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
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
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="img/demos/law-firm-2/team/team-2.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Janice Doe</h2>
                        <p class="text-color-grey positive-ls-3 mb-3">LEAD ATTORNEY</p>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
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
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="img/demos/law-firm-2/team/team-3.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Matt Doe</h2>
                        <p class="text-color-grey positive-ls-3 mb-3">FAMILY LAW ATTORNEY</p>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
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
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="img/demos/law-firm-2/team/team-4.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Ashley Doe</h2>
                        <p class="text-color-grey positive-ls-3 mb-3">MANAGING ATTORNEY</p>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
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
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="img/demos/law-firm-2/team/team-5.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Chuck Doe</h2>
                        <p class="text-color-grey positive-ls-3 mb-3">ASSOCIATE ATTORNEY</p>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
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
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="img/demos/law-firm-2/team/team-1.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">John Doe</h2>
                        <p class="text-color-grey positive-ls-3 mb-3">CEO & FOUNDER</p>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
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
    </div>
</div>

<hr class="my-0">

<div class="container pb-4 mb-5">
    <div class="row py-5 my-4">
        <div class="col text-center">
            <h2 class="text-color-dark text-12 font-weight-medium mb-0"><em>Extensive Resources and Commitment</em></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero.</p>
            <div class="row py-4 my-2">
                <div class="col-sm-6 col-xl-4">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
                            Pellentesque nibh
                        </li>
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
                            Ultricies nibh pellen
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
                            Ultricies nibh pellen
                        </li>
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
                            Pellentesque nibh
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i> 
                            Ultricies nibh
                        </li>
                    </ul>
                </div>
            </div>
            <a href="demo-law-firm-2-contact.html" class="custom-read-more-link d-flex align-items-center btn btn-link text-color-primary text-decoration-none svg-fill-color-primary svg-stroke-color-primary font-weight-semibold text-3 line-height-1 p-0">
                LEARN MORE
                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                </svg>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 text-center mx-auto">
            <div class="owl-carousel-wrapper" style="height: 285px;">
                <div class="owl-carousel owl-theme custom-carousel-style-1 dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'autoplaySpeed': 500, 'dotsSpeed': 500}">
                    <div data-dynamic-height="['255px','255px','255px','750px','255px']" style="height: 255px;">
                        <div class="custom-carousel-style-1-icon-wrapper mb-3">
                            <img width="50" height="50" src="img/demos/law-firm-2/icons/icon-court.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                        </div>
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold pb-1 mb-2">Get Legal Help</h4>
                        <p class="font-weight-light text-color-dark mb-4">Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                    </div>
                    <div data-dynamic-height="['255px','255px','255px','750px','255px']" style="height: 255px;">
                        <div class="custom-carousel-style-1-icon-wrapper mb-3">
                            <img width="50" height="50" src="img/demos/law-firm-2/icons/icon-court.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                        </div>
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold pb-1 mb-2">Get Legal Help</h4>
                        <p class="font-weight-light text-color-dark mb-4">Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                    </div>
                    <div data-dynamic-height="['255px','255px','255px','750px','255px']" style="height: 255px;">
                        <div class="custom-carousel-style-1-icon-wrapper mb-3">
                            <img width="50" height="50" src="img/demos/law-firm-2/icons/icon-court.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                        </div>
                        <h4 class="alternative-font-4 text-color-dark font-weight-bold pb-1 mb-2">Get Legal Help</h4>
                        <p class="font-weight-light text-color-dark mb-4">Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section section-height-3 bg-primary-darken border-0 m-0 appear-animation" data-appear-animation="fadeIn">
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
</section>

<div class="container py-5 my-5">
    <div class="row pb-2 mb-4">
        <div class="col text-center">
            <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">RECENT CASES</h3>
            <h2 class="text-transform-none text-color-dark font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Success Stories</h2>
        </div>
    </div>
    <div class="row">
        <div class="col appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
            <div class="custom-carousel-style-2 owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'loop': true, 'nav': false, 'dots': true, 'margin': 25, 'stagePadding': 25, 'autoplay': false, 'autoplayTimeout': 7000}">
                <div class="pb-5">
                    <a href="demo-law-firm-2-case-study-detail.html" class="text-decoration-none">
                        <div class="card custom-card-style-2 border-0 border-radius-0">
                            <div class="card-img-top">
                                <img src="img/demos/law-firm-2/cases/case-1.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="card-body">
                                <span class="d-block text-color-grey positive-ls-2 mb-0">FAMILY LAW</span>
                                <h4 class="text-color-dark font-weight-medium text-5-5 mb-2"><em>Family Law Success Case Example</em></h4>
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
                <div class="pb-5">
                    <a href="demo-law-firm-2-case-study-detail.html" class="text-decoration-none">
                        <div class="card custom-card-style-2 border-0 border-radius-0">
                            <div class="card-img-top">
                                <img src="img/demos/law-firm-2/cases/case-2.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="card-body">
                                <span class="d-block text-color-grey positive-ls-2 mb-0">BUSINESS LAW</span>
                                <h4 class="text-color-dark font-weight-medium text-5-5 mb-2"><em>Business Law Success Case Example</em></h4>
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
                <div class="pb-5">
                    <a href="demo-law-firm-2-case-study-detail.html" class="text-decoration-none">
                        <div class="card custom-card-style-2 border-0 border-radius-0">
                            <div class="card-img-top">
                                <img src="img/demos/law-firm-2/cases/case-1.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="card-body">
                                <span class="d-block text-color-grey positive-ls-2 mb-0">FAMILY LAW</span>
                                <h4 class="text-color-dark font-weight-medium text-5-5 mb-2"><em>Family Law Success Case Example</em></h4>
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
            </div>
        </div>
    </div>
</div>

<section class="section parallax bg-transparent border-0 py-0 m-0" data-plugin-parallax data-image-src="img/demos/law-firm-2/backgrounds/background-3.jpg" data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 8, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}">
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
</section>

<div class="container py-5 my-5">
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
</div>

@stop