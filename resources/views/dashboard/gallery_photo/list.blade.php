@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Gellary Photo List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.gallery_photo_add') }}">Add New
                            Gellary Photo</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Album ID.</th>
                        <th>Gallery Caption</th>
                        <th>Gallery Image</th>
                        <th>Serial Number</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getGalleryPhoto && $getGalleryPhoto->count())
                    @foreach ($getGalleryPhoto as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->album_id }}</td>
                        <td>{{ $value->caption }}</td>
                        <td><img src="/uploads/gallery_photo/thumbnail/{{ $value->image }}" width="100px"></td>
                        <td>{{ $value->serial }}</td>
                        <td>
                            <span
                                class="badge
                                {{ $value->status === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($value->created_at)) }}</td>
                        <td>
                            <a href="{{ route('dashboard.gallery_photo_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="{{ route('dashboard.gallery_photo_deleted', $value->id) }}"
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