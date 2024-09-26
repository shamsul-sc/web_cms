@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('sweetalert::alert')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Edit Gallery Album</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.gallery_album_update',$getRecord->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6 outlined-input-container">
                                <select id="type_id" name="type_id" class="form-select">
                                    <option value="">Select album type</option>
                                    @foreach($galleryTypes as $type)
                                    <option value="{{ $type->id }}" {{ old('type_id', $getRecord->type_id ?? '') ==
                                        $type->id ? 'selected' : ''
                                        }}>
                                        {{ app()->getLocale() == 'en' ? $type->type_name : $type->type_name }}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="type_id">Album type<span class="required">*</span></label>
                            </div>
                        </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 outlined-input-container">
                        <input type="text" id="album_name" class="form-control" name="album_name"
                            value="{{ old('album_name',$getRecord->album_name) }}" placeholder="">
                        <label for="slider_text_last_bn"> Album Name<span class="required">*</span></label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 outlined-input-container">
                        <input type="date" id="date" class="form-control" name="date"
                            value="{{ old('date',$getRecord->date) }}" placeholder="">
                        <label for="slider_text_last_bn"> Album Date<span class="required">*</span></label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 outlined-input-container">
                        <input type="text" id="venue" class="form-control" name="venue"
                            value="{{ old('venue',$getRecord->venue) }}" placeholder="">
                        <label for="slider_text_last_bn"> Album venue<span class="required">*</span></label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 ">
                        <label for="image"> Album Image <span class="required">*</span></label>
                        <input type="file" id="featured_image" name="featured_image" class="form-control mb-1">
                        @if($getRecord && $getRecord->featured_image )
                        <img src="{{ asset('/uploads/gallery_Album_photo/thumbnail/' . $getRecord->featured_image ) }}"
                            alt=" Image" width="70">
                        @endif
                        <br>
                        <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                    </div>
                </div>
                <div class="row mt-2 ">
                    <div class="col-md-12 outlined-input-container">
                        <input type="number" id="album_serial" class="form-control" name="album_serial"
                            value="{{ old('album_serial',$getRecord->album_serial) }}" placeholder="  ">
                        <label for="slider_text_last_bn"> Album Serial <span class="required">*</span></label>
                    </div>
                </div>

                <div class="col-md-12 outlined-input-container">
                    <select class="form-select" name="album_status">
                        <option value="" disabled {{ old('album_status', $getRecord->album_status) === null ?
                            'selected' :
                            '' }}>
                            Select Status
                        </option>
                        <option value="Show" {{ old('album_status', $getRecord->album_status) == 'Show' ?
                            'selected' : ''
                            }}>Show</option>
                        <option value="Hide" {{ old('album_status', $getRecord->album_status) == 'Hide' ?
                            'selected' : ''
                            }}>Hide</option>
                    </select>
                    <label> Status <span class="required">*</span></label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 text-center d-flex justify-content-between align-items-center">
                    <a href="{{ route('dashboard.gallery_album_list') }}" class="btn btn-danger px-5 rounded-pill">
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