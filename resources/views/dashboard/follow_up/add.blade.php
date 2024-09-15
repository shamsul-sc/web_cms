@extends('admin_dashboard_includes.app')
@section('content')

<div class="">
    <div class="row">
        <div class="col-xl-12">
            @include('sweetalert::alert')
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Add a Follow Up</h4>

                </div>

                <div class="card-body mt-2">


                    <form action="{{ route('dashboard.follow_up_insert') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{--
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="project_id" name="project_id" class="form-select">
                                    <option value="">Select Project</option>
                                    @foreach($getProject as $Project)
                                    <option value="{{ $Project->project_id }}">{{ $Project->project_name }}</option>
                                    @endforeach

                                </select>
                                <label for="album_id">Project Name<span class="required">*</span></label>
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_id" name="case_id" class="form-control" placeholder=""
                                    maxlength="255" required>
                                <label for="case_id">Case ID <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="date" id="follow_up_date" name="follow_up_date" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="case_id">Follow Up Date <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="follow_up_title_bn" name="follow_up_title_bn"
                                    class="form-control" placeholder="" maxlength="255" required>
                                <label for="follow_up_title_bn">Follow Up Title BN. <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="follow_up_title" name="follow_up_title" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="project_title">Follow Up Title <span class="required">*</span></label>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12  ">
                                <label for="details_bn">Details (Bangla)</label>
                                <textarea id="details_bn" name="details_bn" class="form-control dynamic-char-count"
                                    placeholder="" rows="5"></textarea>

                            </div>
                            <div class="col-md-12 mt-3 ">
                                <label for="details">Details <span class="required">*</span></label>
                                <textarea id="details" name="details" class="form-control dynamic-char-count"
                                    placeholder="" rows="5"></textarea>

                            </div>

                        </div>
                        <br>
                        <hr>

                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="case_image">Follow Up Image <span class="required">*</span></label>
                                <input type="file" id="follow_up_image" name="follow_up_image" class="form-control"
                                    required>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>
                            <div class="col-md-6 mt-4 outlined-input-container">
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
                                <a href="{{ route('dashboard.follow_up_list') }}"
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