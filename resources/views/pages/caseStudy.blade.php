@extends('layouts.default')

@section('title', 'Projects | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                    <li><a href="demo-law-firm-2.html" class="text-color-primary text-decoration-none">HOME</a></li>
                    <li class="text-color-primary active">CASE STUDY</li>
                </ul>
                <h1 class="text-color-light font-weight-bold text-10">Case Study</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    <div class="row pb-4">
        @if($caseStudies && $caseStudies->count())
            @php $animation_delay = 200; @endphp
            @foreach ($caseStudies as $case)
                <div class="col-md-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="{{ $animation_delay }}">
                    <a href="demo-law-firm-2-case-study-detail.html" class="text-decoration-none">
                        <div class="card custom-card-style-2 border-0 border-radius-0">
                            <div class="card-img-top">
                                <img src="/uploads/case_image/thumbnail/{{ $case->case_image }}" class="img-fluid" alt="" />
                            </div>
                            <div class="card-body custom-box-shadow-2">
                                <span class="d-block text-color-grey positive-ls-2 mb-0">FAMILY LAW</span>
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
            @php $animation_delay = $animation_delay+100; @endphp
        @else
        <div class="col-md-12 text-center">
            <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Sorry! No case found.</h2>
        </div>
        @endif
    </div>
</div>

@if($featuredProjects && $featuredProjects->count())
<section class="section overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(img/backgrounds/background-2.webp); background-size: cover; background-position: center;">
    <div class="container py-5 mb-5">
        <div class="row pb-5 mb-4">
            <div class="col text-center">
                <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Featured Projects</h3>
                <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-0">Our Most Valuable Works</h2>
            </div>
        </div>
    </div>
</section>

<div class="owl-carousel-wrapper position-relative z-index-3 pb-4 mb-5" style="height: 373px; margin-top: -225px;">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 3}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': false, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 3000}">
        @foreach ($featuredProjects as $project)
        <div class="py-5">
            <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <img src="/uploads/category/thumbnail/{{ $project->project_image }}" alt="John Doe Image" />
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">{{ app()->getLocale() == 'en' ? $project->project_title : $project->project_title_bn }}</h2>
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

@stop

