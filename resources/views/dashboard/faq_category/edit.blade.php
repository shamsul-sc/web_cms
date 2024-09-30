@extends('admin_dashboard_includes.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card ">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 ">Edit FAQ Category</h4>
                </div>
                <div class="card-body ">
                    <div class="live-preview">
                        <form action="{{ route('dashboard.faq_category_update', $getRecord->id) }}" method="POST">
                            {{ csrf_field() }}

                            <div class="col-md-6 outlined-input-container">

                                <select id="faq_cat_id" name="faq_cat_id" class="form-select">
                                    <option value="">Select FAQ Category</option>
                                    @foreach ($getProjectCategory as $faq_category)
                                        <option value="{{ $faq_category->id }}"
                                            {{ $getRecord->faq_cat_id == $faq_category->id ? 'selected' : '' }}>
                                            {{ $faq_category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="faq_cat_id">Project Name<span class="required">*</span></label>
                            </div>

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="faq_cat_name" class="form-control" name="faq_cat_name"
                                        value="{{ old('faq_cat_name', $getRecord->faq_cat_name) }}" placeholder="">
                                    <label for="slider_text_last_bn">FAQ Category Name<span
                                            class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="faq_cat_name_bn" name="faq_cat_name_bn"
                                        value="{{ old('faq_cat_name_bn', $getRecord->faq_cat_name_bn) }}"
                                        class="form-control" placeholder="">
                                    <label for="faq_cat_name_bn">FAQ Category Name BN<span class="required">*</span></label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="number" id="faq_cat_serial" class="form-control" name="faq_cat_serial"
                                        value="{{ old('faq_cat_serial', $getRecord->faq_cat_serial) }}" placeholder="  ">
                                    <label for="slider_text_last_bn">FAQ Serial Number <span
                                            class="required">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-12 outlined-input-container">
                                <select class="form-select" name="faq_cat_status" required>
                                    <option value="" disabled
                                        {{ old('faq_cat_status', $getRecord->faq_cat_status) === null ? 'selected' : '' }}>
                                        Select Status
                                    </option>
                                    <option value="Show"
                                        {{ old('faq_cat_status', $getRecord->faq_cat_status) == 'Show' ? 'selected' : '' }}>
                                        Show</option>
                                    <option value="Hide"
                                        {{ old('faq_cat_status', $getRecord->faq_cat_status) == 'Hide' ? 'selected' : '' }}>
                                        Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center d-flex justify-content-between align-items-center">
                            <a href="{{ route('dashboard.faq_category_list') }}"
                                class="btn btn-danger px-5 rounded-pill loadButton">
                                <i class="ri-arrow-go-back-line"></i> Go to list
                            </a>
                            <button type="submit" class="btn btn-primary px-5 rounded-pill loadButton">
                                <i class="bi bi-plus-lg"></i> Update
                            </button>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection
