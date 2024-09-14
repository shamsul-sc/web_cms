@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('sweetalert::alert')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Add FAQ Category</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.faq_category_insert') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="faq_cat_id" class="form-control" name="faq_cat_id"
                                    placeholder="">
                                <label for="faq_cat_id">FAQ Category ID<span class="required">*</span></label>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="faq_cat_id" name="faq_cat_id" class="form-select">
                                    <option value="">Select FAQ Category</option>
                                    @foreach($getFaqCategory as $faq_category)
                                    <option value="{{ $faq_category->id }}">{{ $faq_category->faq_category_name
                                        }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="faq_cat_id">FAQ Category Name<span class="required">*</span></label>
                            </div> --}}

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="faq_cat_name" class="form-control" name="faq_cat_name"
                                        placeholder="">
                                    <label for="slider_text_last_bn">FAQ Category Name<span
                                            class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="faq_cat_name_bn" name="faq_cat_name_bn" class="form-control"
                                        placeholder="">
                                    <label for="faq_cat_name_bn">FAQ Category Name BN<span
                                            class="required">*</span></label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="number" id="faq_cat_serial" class="form-control" name="faq_cat_serial"
                                        placeholder="  ">
                                    <label for="slider_text_last_bn">FAQ Serial Number <span
                                            class="required">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-12 outlined-input-container">
                                <select class="form-select" name="faq_cat_status" required>
                                    <option value="" disabled>Select Status</option>
                                    <option value="Show">Show</option>
                                    <option value="Hide">Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="{{ route('dashboard.faq_category_list') }}"
                                    class="btn btn-danger px-5 rounded-pill">
                                    <i class="ri-arrow-go-back-line"></i> Go to list
                                </a>
                                <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                    <i class="bi bi-plus-lg"></i> Submit
                                </button>
                            </div>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>


    @endsection