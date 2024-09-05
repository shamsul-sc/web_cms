@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('layouts._message')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Add Category</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.category_insert') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="category_name" class="form-control" name="category_name"
                                    placeholder="">
                                <label for="slider_text_last_bn">Category Name<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="category_name_bn" name="category_name_bn" class="form-control"
                                    placeholder="">
                                <label for="slider_text_last_bn">Category Name BN<span class="required">*</span></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="slug" name="slug" class="form-control" placeholder=" ">
                                <label for="slider_text_last_bn">Slug EX.URL<span class="required">*</span></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial" placeholder="  ">
                                <label for="slider_text_last_bn">Serial Number <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-12 outlined-input-container">
                            <select class="form-select" name="status" required>
                                <option value="" disabled>Select Status</option>
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                            <label> Status <span class="required">*</span></label>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-between align-items-center">
                        <a href="{{ route('dashboard.list') }}" class="btn btn-danger px-5 rounded-pill">
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