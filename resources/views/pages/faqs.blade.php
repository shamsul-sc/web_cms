@extends('layouts.default')

@section('title', 'FAQs | Treatment Community Foundation')

@section('content')

<section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0" style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
    <div class="container py-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-color-light font-weight-bold text-10">Frequently Asked Questions</h1>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 my-4">
    <div class="row row-gutter-sm py-2">        
        @if($faqs && $faqs->count())            
            <div class="custom-accordion-style-1 custom-accordion-style-1-grey accordion accordion-modern pb-2 mb-4" id="FAQAccordion">
                @php $sl = 1 @endphp
                @foreach ($faqs as $faq)
                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-color-dark text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQ_{{ $faq->id }}">
                                {{ $sl.'. ' }} {!! app()->getLocale() == 'en' ? $faq->question : $faq->question_bn !!}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFAQ_{{ $faq->id }}" class="collapse" data-bs-parent="#FAQAccordion">
                        <div class="card-body ps-4">
                            {!! app()->getLocale() == 'en' ? $faq->answer : $faq->answer_bn !!}
                        </div>
                    </div>
                </div>                
                @endforeach
                @php $sl++ @endphp
            </div>
        @endif
    </div>
</div>

@stop

