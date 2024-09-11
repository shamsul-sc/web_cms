@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('layouts._message')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Add Gallery Photo</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.gallery_photo_insert') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <select id="album_id" name="album_id" class="form-select">
                                    <option value="">Select album</option>
                                    @foreach($albums as $album)
                                    <option value="{{ $album->id }}">
                                        {{ app()->getLocale() == 'en' ? $album->album_name : $album->album_name }}
                                    </option>
                                    @endforeach

                                </select>
                                <label for="album_id">Album<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="caption" class="form-control" name="caption" placeholder="">
                                <label for="slider_text_last_bn">Gallery Caption<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 ">
                                <label for="image">Gallery Image <span class="required">*</span></label>
                                <input type="file" id="image" name="image" class="form-control" required>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial" placeholder="  ">
                                <label for="slider_text_last_bn">Gallery Serial <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-12 outlined-input-container">
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
                        <a href="{{ route('dashboard.gallery_photo_list') }}" class="btn btn-danger px-5 rounded-pill">
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