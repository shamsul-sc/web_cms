@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('sweetalert::alert')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Edit Gallery Photo</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.gallery_photo_update', $getRecord->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <select id="album_id" name="album_id" class="form-select">
                                    <option value="">Select album</option>
                                    @foreach($albums as $album)
                                    <option value="{{ $album->id }}" {{ old('album_id', $getRecord->album_id ?? '') ==
                                        $album->id ? 'selected' : ''
                                        }}>
                                        {{ app()->getLocale() == 'en' ? $album->album_name : $album->album_name }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="album_id">Album<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="caption" class="form-control" name="caption"
                                    value="{{ old('caption',$getRecord->caption) }}" placeholder="">
                                <label for="slider_text_last_bn">Gallery Caption<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 ">
                                <label for="image">Gallery Image <span class="required">*</span></label>
                                <input type="file" id="image" name="image" class="form-control mb-1">
                                @if($getRecord && $getRecord->image )
                                <img src="{{ asset('/uploads/gallery_photo/thumbnail/' . $getRecord->image ) }}"
                                    alt=" Image" width="70">
                                @endif
                                <br>
                                <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial"
                                    value="{{ old('serial',$getRecord->serial) }}" placeholder="  ">
                                <label for="slider_text_last_bn">Gallery Serial <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-12 outlined-input-container">
                            <select class="form-select" name="status">
                                <option value="" disabled {{ old('status', $getRecord->status) === null ?
                                    'selected' :
                                    '' }}>
                                    Select Status
                                </option>
                                <option value="Show" {{ old('status', $getRecord->status) == 'Show' ?
                                    'selected' : ''
                                    }}>Show</option>
                                <option value="Hide" {{ old('status', $getRecord->status) == 'Hide' ?
                                    'selected' : ''
                                    }}>Hide</option>
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