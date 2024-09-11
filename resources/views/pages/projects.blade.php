@extends('layouts.default')

@section('title', 'Projects | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                    <li><a href="demo-law-firm-2.html" class="text-color-primary text-decoration-none">HOME</a></li>
                    <li class="text-color-primary active">PROJECTS</li>
                </ul>
                <h1 class="text-color-light font-weight-bold text-10">Projects</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    <div class="row row-gutter-sm py-2">        
        @if($projects && $projects->count())
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                    <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                        <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                            <img src="/uploads/category/thumbnail/{{ $project->project_image }}" class="card-img-top border-radius-0" alt="John Doe Image" />
                            <div class="card-body text-center px-4 py-5">
                                <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">{{ app()->getLocale() == 'en' ? $project->project_title : $project->project_title_bn }}</h2>
                                <!-- <p class="text-color-grey positive-ls-3 mb-3">{{ app()->getLocale() == 'en' ? $project->project_approx_budget : $project->project_approx_budget }}</p> -->
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
        @endif
        <!-- <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
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
        <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
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
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
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
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
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
        <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">
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
        </div> -->
    </div>
</div>

<section class="section section-height-3 bg-primary-darken border-0 m-0">
    <div class="container py-3">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                <h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
                <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2">Experienced Attorneys?</h2>
                <p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <a href="demo-law-firm-2-contact.html" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3">REQUEST CONSULTATION</a>
            </div>
        </div>
    </div>
</section>

@stop

