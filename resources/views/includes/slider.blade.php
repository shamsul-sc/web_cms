<!-- slider.blade.php -->
<div class="owl-carousel-wrapper" style="height: 845px;">
    <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-235px', 'nav': true, 'navVerticalOffset': '70px', 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">
        @foreach($sliders as $slider)
            <div class="position-relative overlay overlay-show overlay-op-2 overflow-hidden pt-4" data-dynamic-height="['600px','600px','600px','600px','600px']" style="height: 600px;">
                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url('{{ asset('storage/slider_images/' . $slider->image) }}'); background-size: cover; background-position: center;"></div>
                <div class="container position-relative z-index-3 pb-5 h-100">
                    <div class="row justify-content-center align-items-center pb-5 h-100">
                        <div class="col-lg-8 text-center pb-5 mb-5">
                            <h1 class="text-color-light line-height-1 text-12 text-md-14 positive-ls-3 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">
                                {{ App::getLocale() == 'en' ? $slider->slider_text_top : $slider->slider_text_top_bn }}
                            </h1>
                            <h2 class="alternative-font-4 text-color-light line-height-3 text-5 positive-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1300" data-plugin-options="{'minWindowWidth': 0}">
                                {{ App::getLocale() == 'en' ? $slider->slider_text_last : $slider->slider_text_last_bn }}
                            </h2>
                            <a href="{{ $slider->button_url }}" class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">
                                {{ App::getLocale() == 'en' ? $slider->button_text : $slider->button_text_bn }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
