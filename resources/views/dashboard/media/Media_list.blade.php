@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Media Coverage List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.media_cover_add') }}">Add New
                            Media Coverage</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Media Name</th>
                        <th>Media Logo</th>
                        <th>Coverage Title</th>
                        <th>Summary</th>
                        <th>Main Image Title</th>
                        <th>Main Image</th>
                        <th>Full News Image</th>
                        <th>Status</th>
                        <th>Publish Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getMedia && $getMedia->count())
                    @foreach ($getMedia as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->media_name }}</td>
                        <td><img src="/uploads/media_logo/{{ $value->main_image }}" width="100px">

                        </td>
                        <td>{{ $value->coverage_title }}</td>
                        <td>{!! $value->summary !!}</td>
                        <td>{{ $value->main_image_title }}</td>
                        <td><img src="/uploads/main_image/thumbnail/{{ $value->media_logo }}" width="100px">
                        </td>
                        <td>
                            <span
                                class="badge
                                {{ $value->full_news_image === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->full_news_image === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>

                        <td>
                            <span
                                class="badge
                                {{ $value->status === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($value->publish_date)) }}</td>

                        <td class='d-flex'>
                            <a href="{{ route('dashboard.media_cover_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="{{ route('dashboard.media_cover_deleted', $value->id) }}"
                                class="btn btn-sm btn-danger">Delete</a>

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