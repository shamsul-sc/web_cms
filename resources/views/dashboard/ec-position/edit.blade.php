@extends('admin_dashboard_includes.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card ">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1 ">Edit Excursion Committee Position</h4>
                </div>
                <div class="card-body ">
                    <div class="live-preview">
                        <form action="{{ route('ec-position.update', $getSingleRecord->id) }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-12 outlined-input-container">
                                    <input type="text" id="position_name" class="form-control" name="position_name"
                                        value="{{ old('position_name', $getSingleRecord->position_name) }}" placeholder="">
                                    <label for="position_name">Excursion Committee Position Name<span
                                            class="required">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 outlined-input-container">
                                <select class="form-select" name="status" required>
                                    <option value="" disabled
                                        {{ old('status', $getSingleRecord->status) === null ? 'selected' : '' }}>
                                        Select Status
                                    </option>
                                    <option
                                        value="Show"{{ old('status', $getSingleRecord->status) == 'Show' ? 'selected' : '' }}>
                                        Show</option>
                                    <option
                                        value="Hide"{{ old('status', $getSingleRecord->status) == 'Hide' ? 'selected' : '' }}>
                                        Hide</option>
                                </select>
                                <label> Status <span class="required">*</span></label>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center d-flex justify-content-between align-items-center">
                            <a href="{{ route('ec-position.index') }}" class="btn btn-danger px-5 rounded-pill">
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
