@extends('admin_dashboard_includes.app')
@section('content')

<div class="">
    <div class="row">
        <div class="col-xl-12">
            @include('sweetalert::alert')
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Add a Case Study</h4>

                </div>

                <div class="card-body mt-2">


                    <form action="{{ route('dashboard.case_study_insert') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="project_id" name="project_id" class="form-select">
                                    <option value="">Select Project</option>
                                    @foreach($projects as $project)
                                    <option value="{{ $project->id }}">
                                        {{ app()->getLocale() == 'en' ? $project->project_title :
                                        $project->project_title_bn }}
                                    </option>
                                    @endforeach

                                </select>
                                <label for="album_id">Project Title<span class="required">*</span></label>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="project_id" name="project_id" class="form-control" placeholder=""
                                    maxlength="255" required>
                                <label for="project_id">Project ID <span class="required">*</span></label>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_title_bn" name="case_title_bn" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="project_title">Case Title BN. <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_title" name="case_title" class="form-control" placeholder=""
                                    maxlength="255" required>
                                <label for="project_title">Case Title <span class="required">*</span></label>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-lebel" for="introduction_bn">Introduction (Bangla)</label>
                                <textarea id="introduction_bn" name="introduction_bn"
                                    class="form-control dynamic-char-count" maxlength="10" placeholder=""
                                    rows="3"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <label for="introduction">Introduction <span class="required">*</span></label>
                                <textarea id="introduction" name="introduction" class="form-control dynamic-char-count"
                                    maxlength="10" placeholder="" rows="3"></textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <label for="details_bn">Details (Bangla)</label>
                                <textarea id="details_bn" name="details_bn" class="form-control dynamic-char-count"
                                    placeholder="" rows="5"></textarea>

                            </div>
                            <div class="col-md-12 ">
                                <label for="details">Details <span class="required">*</span></label>
                                <textarea id="details" name="details" class="form-control dynamic-char-count"
                                    placeholder="" rows="5"></textarea>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_summary_bn" name="case_summary_bn" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="case_summary_bn">Case Summary (Bangla) <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_summary" name="case_summary" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="case_summary">Case Summary <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="number" id="case_approx_budget" name="case_approx_budget"
                                    class="form-control" placeholder="" required>
                                <label for="case_approx_budget">Case Approx Budget <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <select id="state" name="state" class="form-select">
                                    <option value="Planning">Planning</option>
                                    <option value="Running">Running</option>
                                    <option value="Finished">Finished</option>
                                </select>
                                <label for="state">Project State</label>
                            </div>
                        </div>
                        <br>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 ">
                                <input type="file" id="case_image" name="case_image" class="form-control">
                                <label for="case_image">Case Image <span class="required">*</span></label>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="file" id="case_pdf" name="case_pdf" class="form-control">
                                <label for="case_pdf">Case PDF</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="url" id="youtube_video_link" name="youtube_video_link" class="form-control"
                                    placeholder="" required>
                                <label for="youtube_video_link">YouTube Video Link <span
                                        class="required">*</span></label>
                                <small class="form-text text-muted">Hint: Please upload embed link like
                                    https://www.youtube.com/embed/OW0kUmsQHnU</small>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <select id="album_id" name="album_id" class="form-select">
                                    <option value="">Select Album</option>
                                    {{-- @foreach($albums as $album)
                                    <option value="{{ $album->id }}">{{ $album->name }}</option>
                                    @endforeach --}}
                                </select>
                                <label for="album_id">Album</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="urgent_case" name="urgent_case" class="form-select">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                                <label for="featured_project">Urgent Case</label>
                            </div>

                            <div class="col-md-6 outlined-input-container">
                                <select class="form-select" name="featured_case" required>
                                    <option value="" disabled>Select </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <label> Featured Case <span class="required">*</span></label>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="{{ route('dashboard.case_study_list') }}"
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