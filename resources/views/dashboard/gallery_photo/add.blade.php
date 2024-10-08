@extends('admin_dashboard_includes.app')

@section('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('libs/dropzone/dropzone.css" type="text/css') }}" /> --}}
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1">Add Gallery Photo</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.gallery_photo_insert') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12 outlined-input-container">
                                <select id="album_id" name="album_id" class="form-select">
                                    <option value="">Select album</option>
                                    @foreach ($albums as $album)
                                        <option value="{{ $album->id }}">
                                            {{ app()->getLocale() == 'en' ? $album->album_name : $album->album_name }}
                                        </option>
                                    @endforeach

                                </select>
                                <label for="album_id">Album<span class="required">*</span></label>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="caption" class="form-control" name="caption" placeholder="">
                                    <label for="slider_text_last_bn">Gallery Caption<span class="required">*</span></label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Gallery Image</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="dropzone" id="myDragAndDropUploader">
                                                <div class="fallback">
                                                    <input name="image[]" type="file" multiple="multiple" required>
                                                </div>
                                                <div class="dz-message needsclick text-center">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                    </div>
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="number" id="serial" class="form-control" name="serial"
                                        placeholder="  ">
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

                            <div class="row">
                                <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                    <a href="{{ route('dashboard.gallery_photo_list') }}"
                                        class="btn btn-danger px-5 rounded-pill loadButton">
                                        <i class="ri-arrow-go-back-line"></i> Go to list
                                    </a>
                                    <button type="submit" class="btn btn-primary px-5 rounded-pill loadButton">
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

@section('scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>

    {{-- <!-- dropzone min -->
    <script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>
    <!-- filepond js -->
    <script src="{{ asset('libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}">
    </script>
    <script src="{{ asset('libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <script src="{{ asset('js/pages/form-file-upload.init.js') }}"></script> --}}


    <script type="text/javascript">
        var maxFilesizeVal = 12;
        var maxFilesVal = 10;

        Dropzone.options.myDragAndDropUploader = {

            paramName: "image",
            maxFilesize: maxFilesizeVal,
            maxFiles: maxFilesVal,
            resizeQuality: 1.0,
            acceptedFiles: ".jpeg,.jpg,.png,.webp",
            addRemoveLinks: false,
            timeout: 60000,
            dictFileTooBig: "File is too big. Max filesize: " + maxFilesizeVal + "MB.",
            dictInvalidFileType: "Invalid file type. Only JPG, JPEG, PNG files are allowed.",
            dictMaxFilesExceeded: "You can only upload up to " + maxFilesVal + " files.",
            maxfilesexceeded: function(file) {
                this.removeFile(file);
            },

        };
    </script>
@endsection
