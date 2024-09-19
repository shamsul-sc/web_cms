@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('sweetalert::alert')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Edit Member Type</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.member_type_update',$getRecord->id) }}" method="POST">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="member_type" class="form-control" name="member_type"
                                    value="{{ old('member_type',$getRecord->member_type) }}" placeholder="">
                                <label for="member_type">Member Type<span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial"
                                    value="{{ old('serial',$getRecord->serial) }}" placeholder="  ">
                                <label for="serial">Serial Number <span class="required">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-12 outlined-input-container">
                            <select class="form-select" name="status" required>
                                <option value="" disabled {{ old('status', $getRecord->status) === null
                                    ? 'selected' :
                                    '' }}>
                                    Select Status
                                </option>
                                <option value="show" {{ old('status', $getRecord->status) == 'show' ?
                                    'selected' : ''
                                    }}>Show</option>
                                <option value="hide" {{ old('status', $getRecord->status) == 'hide' ?
                                    'selected' : ''
                                    }}>Hide</option>
                            </select>
                            <label> Status <span class="required">*</span></label>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-between align-items-center">
                        <a href="{{ route('dashboard.member_type_list') }}" class="btn btn-danger px-5 rounded-pill">
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