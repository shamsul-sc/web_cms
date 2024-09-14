@extends('layouts.default')

@section('title', 'Projects | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0" style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10">{{ $title }}</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    <div class="row row-gutter-sm py-2">        
        @if($jointProjects && $jointProjects->count())
            @foreach ($jointProjects as $project)
                <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                    <a href="{{ url('project',$project->slug ) }}" class="text-decoration-none">
                        <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                            <img src="/uploads/project_image/thumbnail/{{ $project->project_image }}" class="card-img-top border-radius-0" alt="John Doe Image" />
                            <div class="card-body text-center px-4 py-5">
                                <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">{{ app()->getLocale() == 'en' ? $project->project_title : $project->project_title_bn }}</h2>
                                <!-- <p class="text-color-grey positive-ls-3 mb-3">{{ app()->getLocale() == 'en' ? $project->category_name : $project->category_name_bn }}</p> -->
                                <p class="font-weight-light text-color-dark line-height-7 mb-2">{!! app()->getLocale() == 'en' ? $project->project_summary : $project->project_summary_bn !!}</p>
                                <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
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
        @else
            <div class="col-md-12 text-center">
                <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">Sorry! No data found.</h2>
            </div>
        @endif
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

