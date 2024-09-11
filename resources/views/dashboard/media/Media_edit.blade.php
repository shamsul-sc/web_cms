@extends('admin_dashboard_includes.app')
@section('content')

<div class="">
    <div class="row">
        <div class="col-xl-12">
            @include('layouts._message')
            <div class="card shadow-lg">
                <div class="card-header align-items-center d-flex text-white"
                    style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 text-white">Edit a Media Coverage</h4>
                </div>
                <div class="card-body mt-2">
                    <form action="{{ route('dashboard.media_cover_update',$getMedia->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <input type="text" id="media_name" name="media_name" class="form-control" placeholder=""
                                    value="{{ old('media_name',$getMedia->media_name) }}" maxlength="255">
                                <label for="case_id">Media Name <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 ">
                                <label for="media_logo">Media Logo <span class="required">*</span></label>
                                <input type="file" id="media_logo" name="media_logo" class="form-control mb-1">
                                @if($getMedia && $getMedia->media_logo)
                                <img src="{{ asset('/uploads/media_logo/' . $getMedia->media_logo) }}" alt="Case Image"
                                    width="70">
                                @endif
                                <br>
                                <small class="form-text text-muted">Please upload a logo image.</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <input type="text" id="main_image_title" name="main_image_title" class="form-control"
                                    value="{{ old('main_image_title',$getMedia->main_image_title) }}" placeholder=""
                                    maxlength="255" required>
                                <label for="main_image_title">Main Image Title <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 ">
                                <label for="main_image">Main Image <span class="required">*</span></label>
                                <input type="file" id="main_image" name="main_image" class="form-control mb-1">

                                @if($getMedia && $getMedia->main_image)
                                <img src="{{ asset('/uploads/main_image/thumbnail/' . $getMedia->main_image) }}"
                                    alt="Case Image" width="70">
                                @endif

                                <br>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 outlined-input-container">
                                <input type="text" id="coverage_title" name="coverage_title" class="form-control"
                                    value="{{ old('coverage_title',$getMedia->coverage_title) }}" placeholder=""
                                    maxlength="255">
                                <label for="coverage_title">Coverage Title<span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 outlined-input-container">
                                <input disabled type="url" id="url" name="url" class="form-control" placeholder=""
                                    value="{{ old('url',$getMedia->url) }}" maxlength="255">
                                <label for="coverage_title">URL<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 mt-3 ">
                                <label for="summary">Coverage Text <span class="required">*</span></label>
                                <textarea id="coverage_text" name="coverage_text"
                                    class="form-control dynamic-char-count" placeholder=""
                                    rows="5">{!! old('coverage_text',$getMedia->coverage_text) !!}"</textarea>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 mt-3 ">
                                <label for="summary">Summary <span class="required">*</span></label>
                                <textarea id="summary" name="summary" class="form-control dynamic-char-count"
                                    placeholder="" rows="5">{!! old('summary',$getMedia->summary) !!}"</textarea>

                            </div>

                        </div>
                        <br>
                        <hr>

                        <div class="row mb-3">
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <input disabled type="text" id="youtube_video_link" name="youtube_video_link"
                                    value="{{ old('youtube_video_link',$getMedia->youtube_video_link) }}"
                                    class="form-control" placeholder="" maxlength="255">
                                <label for="youtube_video_link">Youtube Video Link <span
                                        class="required">*</span></label>
                                <small class="form-text text-muted">Hint: Please upload embed link like
                                    https://www.youtube.com/embed/OW0kUmsQHnU</small>
                            </div>
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <select class="form-select" name="full_news_image">
                                    <option value="" disabled>Select Status</option>
                                    <option value="Show" {{ old('full_news_image', $getMedia->full_news_image) == 'Show'
                                        ?
                                        'selected' : ''
                                        }}>Show</option>
                                    <option value="Hide" {{ old('full_news_image', $getMedia->full_news_image) == 'Hide'
                                        ?
                                        'selected' : ''
                                        }}>Hide</option>
                                </select>
                                <label> Full News Image <span class="required">*</span></label>
                                <small class="form-text text-muted">Image width must be 500 pixel.</small>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <input type="date" id="publish_date" name="publish_date" class="form-control"
                                    value="{{ old('publish_date',$getMedia->publish_date) }}" placeholder=""
                                    maxlength="255">
                                <label for="case_id">Publish Date <span class="required">*</span></label>
                            </div>
                            <div class="col-md-6 mt-4 outlined-input-container">
                                <select class="form-select" name="status">
                                    <option value="" disabled>Select Status</option>
                                    <option value="Show" {{ old('status', $getMedia->status) == 'Show' ?
                                        'selected' : ''
                                        }}>Show</option>
                                    <option value="Hide" {{ old('status', $getMedia->status) == 'Hide' ?
                                        'selected' : ''
                                        }}>Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                        </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 text-center d-flex justify-content-between align-items-center">
                        <a href="{{ route('dashboard.media_cover_list') }}" class="btn btn-danger px-5 rounded-pill">
                            <i class="ri-arrow-go-back-line"></i> Go to list
                        </a>
                        <button type="submit" class="btn btn-primary px-5 rounded-pill">
                            <i class="bi bi-plus-lg"></i> Update
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection