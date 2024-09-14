@extends('admin_dashboard_includes.app')
@section('content')

<div class="col-12">
    <div class="row">
        <div class="col-xl-12">
            @include('sweetalert::alert')
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Add a FAQ</h4>

                </div>

                <div class="card-body  mt-2">


                    <form action="{{ route('dashboard.faq_insert') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="faq_cat_id" name="faq_cat_id" class="form-select">
                                    <option value="">Select FAQ Category</option>
                                    @foreach($getFaqCategory as $faq_category)
                                    <option value="{{ $faq_category->id }}">{{ $faq_category->faq_cat_name }}</option>
                                    @endforeach
                                </select>
                                <label for="faq_cat_id">FAQ Category Name<span class="required">*</span></label>
                            </div>

                            <div class="col-md-6 outlined-input-container">
                                <input type="number" id="position" name="position" class="form-control" placeholder=""
                                    maxlength="255" required>
                                <label for="project_title">Position <span class="required">*</span></label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="question" name="question" class="form-control" placeholder=""
                                    maxlength="255" required>
                                <label for="project_title">Question <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="answer" name="answer" class="form-control" placeholder=""
                                    maxlength="100" required>
                                <label for="answer">Answer<span class="required">*</span></label>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="question_bn" name="question_bn" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="project_title">Question BN.(Bangla) <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="answer_bn" name="answer_bn" class="form-control" placeholder=""
                                    maxlength="100" required>
                                <label for="answer">Answer BN(Bangla)<span class="required">*</span></label>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select class="form-select" name="status" required>
                                    <option value="" disabled>Select Status</option>
                                    <option value="Show">Show</option>
                                    <option value="Hide">Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="{{ route('dashboard.faq_list') }}" class="btn btn-danger px-5 rounded-pill">
                                    <i class="ri-arrow-go-back-line"></i> Go to list
                                </a>
                                <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                    <i class="bi bi-plus-lg"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection