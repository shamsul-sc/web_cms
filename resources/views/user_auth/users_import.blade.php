@extends('admin_dashboard_includes.app')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-xxl-6">
            <div class="card">
                @include('sweetalert::alert')
                <div class="card-header align-items-center d-flex text-white" style="background-color: rgb(93, 198, 93);">
                    <h4 class="card-title mb-0 flex-grow-1">Import Users</h4>
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center">
                                        <i class="ri-file-excel-2-line align-bottom me-2"
                                            style="font-size: 1.5rem; color: #28a745;"></i>
                                        <h5 class="mb-0">Import Users</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="col-md-6 text-end">
                                            <form action="{{ route('dashboard.upload') }}" method="POST"
                                                enctype="multipart/form-data" class="d-flex justify-content-start">
                                                @csrf
                                                <input type="file" name="file"accept=".xlsx,.xls,.csv" required
                                                    class="form-control w-50 me-2">
                                                <button type="submit" class="btn btn-success loadButton">
                                                    <span class="icon-on"><i
                                                            class="ri-file-excel-2-line align-bottom me-1"></i> Import
                                                        Users</span>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center d-flex justify-content-between align-items-center">
                                <a href="{{ url('users') }}" class="btn btn-danger px-5 rounded-pill loadButton">
                                    <i class="ri-arrow-go-back-line"></i> Back
                                </a>
                                <button type="submit" class="btn btn-primary px-5 rounded-pill loadButton">
                                    <i class="ri-save-line"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <script>
    Dropzone.autoDiscover = false;
    let dropzone = new Dropzone(".dropzone", {
        url: "{{ route('dashboard.upload') }}", // Define route for upload
        maxFiles: 1,
        acceptedFiles: ".xlsx, .xls",
        addRemoveLinks: true,
        success: function(file, response) {
            alert("File uploaded successfully");
        },
        error: function(file, response) {
            alert("File upload failed");
        }
    });
</script> --}}
