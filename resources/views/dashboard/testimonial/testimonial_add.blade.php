@extends('admin_dashboard_includes.app')
@section('content')

<div class="">
    <div class="row">
        <div class="col-xl-12">
            @include('layouts._message')
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Add a Testimonial</h4>
                </div>
                <div class="card-body mt-2">

                    <form action="{{ route('dashboard.testimonial_insert') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="company_name" name="company_name" class="form-control" required
                                    placeholder="" maxlength="255" required>
                                <label for="case_id">Company Name <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="url" id="company_url" name="company_url" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="case_id">Company Url <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <input type="text" id="author_name" name="author_name" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="case_id">Author Name <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 ">
                                <label for="author_image">Author Image <span class="required">*</span></label>
                                <input type="file" id="author_image" name="author_image" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <small class="form-text text-muted">Please Upload square size image.</small>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="designation" class="form-control" name="designation"
                                    placeholder="  ">
                                <label for="serial">Designation <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12  ">
                                <label for="content">Content</label>
                                <textarea id="content" name="content" class="form-control dynamic-char-count"
                                    placeholder="" rows="5"></textarea>

                            </div>
                        </div>
                        <br>
                        <hr>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial" placeholder="  ">
                                <label for="serial">Serial <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6  outlined-input-container">
                                <select class="form-select" name="status" required>
                                    <option value="" disabled>Select Status</option>
                                    <option value="Show">Show</option>
                                    <option value="Hide">Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="{{ route('dashboard.testimonial_list') }}"
                                    class="btn btn-danger px-5 rounded-pill">
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