@extends('admin_dashboard_includes.app')
@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col-xl-12">
            @include('layouts._message')
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Add a Case Study</h4>

                </div>

                <div class="card-body mt-2">


                    <form action="{{ route('dashboard.case_study_update',$getRecord->id) }}" method="POST"
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
                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="project_id" name="project_id"
                                    value="{{ old('project_id',$getRecord->project_id) }}" class="form-control"
                                    placeholder="" maxlength="255">
                                <label for="project_id">Project ID <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_title_bn" name="case_title_bn"
                                    value="{{ old('case_title_bn',$getRecord->case_title_bn) }}" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="project_title">Case Title BN. <span class="required">*</span></label>

                            </div>

                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_title" name="case_title"
                                    value="{{ old('case_title',$getRecord->case_title) }}" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="project_title">Case Title <span class="required">*</span></label>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-lebel" for="introduction_bn">Introduction (Bangla)</label>
                                <textarea id="introduction_bn" name="introduction_bn"
                                    value="{{ old('introduction_bn',$getRecord->introduction_bn) }}"
                                    class="form-control dynamic-char-count" maxlength="10" placeholder=""
                                    rows="3"></textarea>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <label for="introduction">Introduction <span class="required">*</span></label>
                                <textarea id="introduction" name="introduction"
                                    value="{{ old('introduction',$getRecord->introduction) }}"
                                    class="form-control dynamic-char-count" maxlength="10" placeholder=""
                                    rows="3"></textarea>

                            </div>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-12 ">
                                <label for="details_bn">Details (Bangla)</label>
                                <textarea id="details_bn" name="details_bn"
                                    value="{{ old('details_bn',$getRecord->details_bn) }}"
                                    class="form-control dynamic-char-count" placeholder="" rows="5"></textarea>

                            </div>
                            <div class="col-md-12 ">
                                <label for="details">Details <span class="required">*</span></label>
                                <textarea id="details" name="details" value="{{ old('details',$getRecord->details) }}"
                                    class="form-control dynamic-char-count" placeholder="" rows="5"></textarea>

                            </div>

                        </div>
                        <br>
                        <div class="row mb-6">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_summary_bn" name="case_summary_bn"
                                    value="{{ old('case_summary_bn',$getRecord->case_summary_bn) }}"
                                    class="form-control" placeholder="" maxlength="255" required>
                                <label for="case_summary_bn">Case Summary (Bangla) <span
                                        class="required">*</span></label>
                            </div>

                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="case_summary" name="case_summary"
                                    value="{{ old('case_summary',$getRecord->case_summary) }}" class="form-control"
                                    placeholder="" maxlength="255" required>
                                <label for="case_summary">Case Summary <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="number" id="case_approx_budget" name="case_approx_budget"
                                    value="{{ old('case_approx_budget',$getRecord->case_approx_budget) }}"
                                    class="form-control" placeholder="" required>
                                <label for="case_approx_budget">Case Approx Budget <span
                                        class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <select id="state" name="state" class="form-select">
                                    <option value="Planning" {{ old('state', $getRecord->state) == 'Planning' ?
                                        'selected' : ''
                                        }}>Planning</option>

                                    <option value="Running" {{ old('state', $getRecord->state) == 'Running' ? 'selected'
                                        : ''
                                        }}>Running</option>

                                    <option value="Finished" {{ old('state', $getRecord->state) == 'Finished' ?
                                        'selected' : ''
                                        }}>Finished</option>
                                </select>
                                <label for="state">Project State</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label for="case_image">Case Image <span class="required">*</span></label>
                                <input type="file" id="case_image" name="case_image" class="form-control mb-1">
                                @if($getRecord && $getRecord->case_image)
                                <img src="{{ asset('/uploads/case_image/thumbnail/' . $getRecord->case_image) }}"
                                    alt="Case Image" width="70">
                                @endif
                                <br>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input type="file" id="case_pdf" name="case_pdf" class="form-control">
                                <label for="case_pdf">Case PDF</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="url" id="youtube_video_link" name="youtube_video_link" class="form-control"
                                    placeholder="">
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

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <select id="urgent_case" name="urgent_case" class="form-select">
                                    <option value="Yes" {{ old('urgent_case', $getRecord->urgent_case) == 'Yes' ?
                                        'selected' : ''
                                        }}>Yes</option>

                                    <option value="No" {{ old('urgent_case', $getRecord->urgent_case) == 'No' ?
                                        'selected' : ''
                                        }}>No</option>

                                </select>
                                <label for="featured_project">Urgent Case</label>
                            </div>

                            <div class="col-md-6 outlined-input-container">
                                <select class="form-select" name="featured_case" required>
                                    <option value="" disabled>Select </option>
                                    <option value="Yes" {{ old('featured_case', $getRecord->featured_case) == 'Yes' ?
                                        'selected' : ''
                                        }}>Yes</option>

                                    <option value="No" {{ old('featured_case', $getRecord->featured_case) == 'No' ?
                                        'selected' : ''
                                        }}>No</option>
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