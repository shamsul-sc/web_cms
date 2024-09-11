@extends('layouts.default')

@section('title', 'Projects | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                    <li><a href="demo-law-firm-2.html" class="text-color-primary text-decoration-none">HOME</a></li>
                    <li class="text-color-primary active">AlBUMS</li>
                </ul>
                <h1 class="text-color-light font-weight-bold text-10">AlBUMS</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    @if($galleryTypes && $galleryTypes->count())        
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
                    @foreach ($galleryTypes as $type) 
                    <li class="nav-item" data-option-value=".{{ $type->id }}"><a class="nav-link text-2-5 text-uppercase" href="#">{{ $type->type_name }}</a></li>
                    @endforeach
                </ul>

                @if($albums && $albums->count()) 
                <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                        @foreach ($albums as $album)
                        <div class="col-12 col-sm-6 col-lg-3 isotope-item {{ $album->type_id }}">
                            <div class="portfolio-item">
                                <a href="portfolio-single-wide-slider.html" aria-label="">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="/uploads/gallery_Album_photo/thumbnail/{{ $album->featured_image }}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{ $album->album_name }}</span>
                                                <span class="thumb-info-type">{{ $album->type_name }}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    @endif

    
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

