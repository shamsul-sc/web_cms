@extends('admin_dashboard_includes.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card ">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 ">Add Gallery Type</h4>
                </div>
                <div class="card-body ">
                    <div class="live-preview">
                        <form action="{{ route('dashboard.gallery_type_insert') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="type_name" class="form-control" name="type_name"
                                        placeholder="">
                                    <label for="slider_text_last_bn">Gallery Type Name<span
                                            class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="number" id="type_serial" class="form-control" name="type_serial"
                                        placeholder="  ">
                                    <label for="slider_text_last_bn">Gallery Serial <span class="required">*</span></label>
                                </div>
                            </div>

                            <div class="col-md-12 outlined-input-container">
                                <select class="form-select" name="type_status" required>
                                    <option value="" disabled>Select Status</option>
                                    <option value="Show">Show</option>
                                    <option value="Hide">Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center d-flex justify-content-between align-items-center">
                            <a href="{{ route('dashboard.gallery_type_list') }}"
                                class="btn btn-danger px-5 rounded-pill loadButton">
                                <i class="ri-arrow-go-back-line"></i> Go to list
                            </a>
                            <button type="submit" class="btn btn-primary px-5 rounded-pill loadButton">
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
