@extends('admin_dashboard_includes.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-xxl-6">
        <div class="card ">
            @include('layouts._message')
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h4 class="card-title mb-0 flex-grow-1 ">Add Category</h4>
            </div>
            <div class="card-body ">
                <div class="live-preview">
                    @include('dashboard.project_category.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection