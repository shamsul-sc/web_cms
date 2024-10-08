@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        {{-- @include('layouts._message') --}}
        @include('sweetalert::alert')
        <div class="card">
            <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0 flex-grow-1 text-white">Add a Project</h5>

            </div>
            <div class="card-body mt-2">
                <form action="{{ route('dashboard.project_insert') }}" method="POST" enctype="multipart/form-data"
                    novalidate>
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6 outlined-input-container">
                            <select id="cat_id" name="cat_id" class="form-select">
                                <option value="">Select Category</option>
                                @foreach($getRecord as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <label for="album_id">Category Name<span class="required">*</span></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 outlined-input-container ">

                            <input type="text" id="project_title" name="project_title" class="form-control"
                                placeholder="" maxlength="255" required>
                            <label for="project_title">Project Title <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6 outlined-input-container">
                            <input type="text" id="slug" name="slug" class="form-control" placeholder="" maxlength="100"
                                required>
                            <label for="slug">Slug EX.URL <span class="required">*</span></label>
                            <small class="form-text text-muted">Use small letters and underscores. Example:
                                "kfh_spondon"</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 outlined-input-container">
                            <input type="text" id="project_title_bn" name="project_title_bn" class="form-control"
                                placeholder="" maxlength="255" required>
                            <label for="project_title_bn">Project Title (Bangla) <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6 outlined-input-container">
                            <select id="joint_project" name="joint_project" class="form-select" required>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <label for="joint_project">Joint Project</label>
                            <small class="form-text text-muted">KFH project with another organization</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 outlined-input-container">
                            <select id="user_id" name="user_id" class="form-select">
                                <!-- Assuming you have a list of users to select from -->
                                <option value="">Select Chairman</option>
                                {{-- @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach --}}
                            </select>
                            <label for="user_id">Project Chairman</label>
                        </div>
                        <div class="col-md-6 outlined-input-container">
                            <input type="number" id="project_approx_budget" name="project_approx_budget"
                                class="form-control" placeholder="" required>
                            <label for="project_approx_budget">Project Approx. Budget <span
                                    class="required">*</span></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="introduction">Introduction <span class="required">*</span></label>
                            <textarea id="introduction" name="introduction" class="form-control dynamic-char-count"
                                maxlength="10" placeholder="" rows="3"></textarea>

                        </div>
                        <div class="col-md-12">
                            <label class="form-lebel mt-4" for="introduction_bn">Introduction (Bangla)<span
                                    class="required">*</span></label>
                            <textarea id="introduction_bn" name="introduction_bn"
                                class="form-control dynamic-char-count" maxlength="10" placeholder=""
                                rows="3"></textarea>

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 ">
                            <label for="details">Details <span class="required">*</span></label>
                            <textarea id="details" name="details" class="form-control  dynamic-char-count"
                                placeholder="" rows="5"></textarea>

                        </div>
                        <div class="col-md-12 mt-4 ">
                            <label for="details_bn">Details (Bangla)<span class="required">*</span></label>
                            <textarea id="details_bn" name="details_bn" class="form-control  dynamic-char-count"
                                placeholder="" rows="5"></textarea>

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 ">
                            <label for="project_summary">Project Summary <span class="required">*</span></label>
                            <textarea id="project_summary" name="project_summary"
                                class="form-control dynamic-char-count" placeholder="" rows="3"></textarea>

                        </div>
                        <div class="col-md-12 mt-4 ">
                            <label for="project_summary_bn">Project Summary (Bangla)<span
                                    class="required">*</span></label>
                            <textarea id="project_summary_bn" name="project_summary_bn"
                                class="form-control dynamic-char-count" placeholder="" rows="3"></textarea>

                        </div>
                    </div>
                    <br>
                    <hr>

                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="project_image">Project Image <span class="required">*</span></label>
                            <input type="file" id="project_image" name="project_image" class="form-control" required>
                            <small class="form-text text-muted">Please upload a 600x340 pixels image.</small>
                        </div>
                        <div class="col-md-6 mt-4 outlined-input-container">
                            <input type="file" id="project_pdf" name="project_pdf" class="form-control">
                            <label for="project_pdf">Project PDF</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4 outlined-input-container">
                            <input type="url" id="youtube_video_link" name="youtube_video_link" class="form-control"
                                placeholder="">
                            <label for="youtube_video_link">YouTube Video Link</label>
                            <small class="form-text text-muted">Hint: Please upload embed link like
                                https://www.youtube.com/embed/OW0kUmsQHnU</small>
                        </div>
                        <div class="col-md-6 mt-4 outlined-input-container">
                            <select id="album_id" name="album_id" class="form-select" required>
                                <option value="">Select Album</option>
                                @foreach($getGalleryAlbum as $album)
                                <option value="{{ $album->id }}">{{ $album->album_name }}</option>
                                @endforeach
                            </select>
                            <label for="album_id">Album</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 outlined-input-container">
                            <select id="featured_project" name="featured_project" class="form-select">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <label for="featured_project">Featured Project</label>
                        </div>
                        <div class="col-md-6 outlined-input-container">
                            <select id="state" name="state" class="form-select">
                                <option value="Planning">Planning</option>
                                <option value="Running">Running</option>
                                <option value="Finished">Finished</option>
                            </select>
                            <label for="state">Project State</label>
                        </div>
                        <div class="col-md-6 outlined-input-container">
                            <select class="form-select" name="status" required>
                                <option value="" disabled>Select Status</option>
                                <option value="Show">Show</option>
                                <option value="Hide">Hide</option>
                            </select>
                            <label> Status <span class="required">*</span></label>
                        </div>
                        <div class="col-md-6 outlined-input-container">
                            <input type="number" id="serial" name="serial" class="form-control" placeholder="" required>
                            <label for="serial">Serial <span class="required">*</span></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center d-flex justify-content-between align-items-center">
                            <a href="{{ route('dashboard.project_list') }}" class="btn btn-danger px-5 rounded-pill">
                                <i class="ri-arrow-go-back-line"></i> Go to list
                            </a>
                            <button type="submit" class="btn btn-primary px-5 rounded-pill">
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

@if(Session::has('message'))
<script>
    swal("Message","{{  Session::get('message')}}",'success',{
        button:true,
        button:'ok',
        timer:3000,
    });
</script>

@endif