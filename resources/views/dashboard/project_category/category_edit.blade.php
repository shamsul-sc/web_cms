@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('layouts._message')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Edit Category</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    <form action="{{ route('dashboard.category_update',$getRecord->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="category_name" class="form-control" name="category_name"
                                    value="{{ old('category_name',$getRecord->category_name) }}" placeholder="">
                                <label for="slider_text_last_bn">Category Name<span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="category_name_bn" name="category_name_bn"
                                    value="{{ old('category_name_bn',$getRecord->category_name_bn) }}"
                                    class="form-control" placeholder="">
                                <label for="slider_text_last_bn">Category Name BN<span class="required">*</span></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="text" id="slug" name="slug" value="{{ old('slug',$getRecord->slug) }}"
                                    class="form-control" placeholder=" ">
                                <label for="slider_text_last_bn">Slug EX.URL<span class="required">*</span></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 outlined-input-container">
                                <input type="number" id="serial" class="form-control" name="serial"
                                    value="{{ old('serial',$getRecord->serial) }}" placeholder="  ">
                                <label for="slider_text_last_bn">Serial Number <span class="required">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-12 outlined-input-container">
                            <select class="form-select" name="status">
                                <option value="" disabled {{ old('status', $getRecord->status) === null ? 'selected' :
                                    '' }}>
                                    Select Status
                                </option>
                                <option value="show" {{ old('status', $getRecord->status) == 'show' ? 'selected' : ''
                                    }}>
                                    Show
                                </option>
                                <option value="hide" {{ old('status', $getRecord->status) == 'hide' ? 'selected' : ''
                                    }}>
                                    Hide
                                </option>
                            </select>
                            <label> Status <span class="required">*</span></label>
                        </div>
                </div>
                <div class=" text-center d-flex col-6">
                    <button type="submit" class="btn btn-primary px-5 rounded-pill"><i class=" bi bi-plus-lg"></i>
                        Update</button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>

@endsection