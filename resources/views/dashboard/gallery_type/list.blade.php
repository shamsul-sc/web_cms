@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Gellary Type List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.gallery_type_add') }}">Add New
                            Gellary Type</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gallery Type Name</th>
                        <th>Serial Number</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getGalleryType && $getGalleryType->count())
                    @foreach ($getGalleryType as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->type_name }}</td>
                        <td>{{ $value->type_serial }}</td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($value->created_at)) }}</td>


                        <td>
                            <span
                                class="badge
                                {{ $value->type_status === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->type_status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>

                        <td>
                            <a href="{{ route('dashboard.gallery_type_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="{{ route('dashboard.gallery_type_deleted', $value->id) }}"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to deleted?')">Delete</a>

                        </td>


                    </tr>
                    @endforeach

                    @endif
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection