@extends('admin_dashboard_includes.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card ">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 ">Add Excursion Committee Serial</h4>
                </div>
                <div class="card-body ">
                    <div class="live-preview">
                        <form action="{{ route('ec-serial.store') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="ec_name" class="form-control" name="ec_name" placeholder="">
                                    <label for="ec_name">Excursion Committee Serial Name<span
                                            class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 outlined-input-container">
                                    <input type="date" id="start_date" class="form-control" name="start_date"
                                        placeholder="">
                                    <label for="start_date">Start Date<span class="required">*</span></label>
                                </div>
                                <div class="col-md-6 outlined-input-container">
                                    <input type="date" id="end_date" class="form-control" name="end_date"
                                        placeholder="">
                                    <label for="end_date">End Date<span class="required">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 outlined-input-container">
                                <select class="form-select" name="status" required>
                                    <option value="" disabled>Select Status</option>
                                    <option value="Running">Running</option>
                                    <option value="Finished">Finished</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center d-flex justify-content-between align-items-center">
                            <a href="{{ route('ec-serial.index') }}" class="btn btn-danger px-5 rounded-pill">
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
