@extends('admin_dashboard_includes.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card ">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 ">Add Excursion Committee Member</h4>
                </div>
                <div class="card-body ">
                    <div class="live-preview">
                        <form action="{{ route('ec-member.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row ">
                                <div class="col-md-12 outlined-input-container">
                                    <select id="user_id" name="user_id" class="form-select">
                                        <option value="">Select User </option>
                                        @foreach ($getUser as $user)
                                            <option value="{{ $user->id }}">
                                                {{ app()->getLocale() == 'en' ? $user->name : $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="ec_id">User Name<span class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12 outlined-input-container">
                                    <select id="ec_position_id" name="ec_position_id" class="form-select">
                                        <option value="">Select Excursion Committee Position </option>
                                        @foreach ($getEcPosition as $position)
                                            <option value="{{ $position->id }}">
                                                {{ app()->getLocale() == 'en' ? $position->position_name : $position->position_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="ec_id">Excursion Committee Position<span
                                            class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12 outlined-input-container">
                                    <select id="ec_id" name="ec_id" class="form-select">
                                        <option value="">Select Excursion Committee Serial </option>
                                        @foreach ($getEcSerial as $serial)
                                            <option value="{{ $serial->id }}">
                                                {{ app()->getLocale() == 'en' ? $serial->ec_name : $serial->ec_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <label for="ec_id">Excursion Committee Serial<span class="required">*</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="number" id="serial" class="form-control" name="serial" placeholder="">
                                    <label for="serial">Serial<span class="required">*</span></label>
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
                            <a href="{{ route('ec-member.index') }}" class="btn btn-danger px-5 rounded-pill">
                                <i class="ri-arrow-go-back-line"></i> Go to list
                            </a>
                            <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                <i class="bi bi-plus-lg"></i> Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
