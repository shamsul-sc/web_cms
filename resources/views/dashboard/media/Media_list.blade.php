@extends('admin_dashboard_includes.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @include('sweetalert::alert')
                <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                    <h5 class="card-title flex-grow-1 mb-0 text-white">Media Coverage List</h5>
                    <div class="flex-shrink-0">
                        <a class="btn btn-soft-info waves-effect waves-light text-black loadButton"
                            href="{{ route('dashboard.media_cover_add') }}">Add New
                            Media Coverage</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-sm-12  d-flex justify-content-between">
                        <div id="scroll-vertical_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="scroll-vertical"></label>
                        </div>

                    </div>
                </div>
                <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                    style="width:100%">
                    <thead>
                        <tr class="text-nowrap py-2">
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
                        @if ($getMedia && $getMedia->count())
                            @forelse ($getMedia as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->media_name }}</td>
                                    <td><img src="/uploads/media_logo/{{ $value->media_logo }}" width="100px">

                                    </td>
                                    <td>{{ $value->coverage_title }}</td>
                                    <td>{!! $value->summary !!}</td>
                                    <td>{{ $value->main_image_title }}</td>
                                    <td><img src="/uploads/main_image/thumbnail/{{ $value->main_image }}" width="100px">
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

                                    <td class='d-flex mt-4 gap-1'>
                                        <a href="{{ route('dashboard.media_cover_edit', $value->id) }}"
                                            class="btn btn-sm btn-info loadButton">Edit</a>

                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                            onclick="deleteConfirmation({{ $value->id }})">Delete</a>

                                        <form id="delete-form-{{ $value->id }}"
                                            action="{{ route('dashboard.media_cover_deleted', $value->id) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        @else
                            <tr>
                                <td class="text-center" colspan="12">No records found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <div></div>
                    <div class="d-flex justify-content-end">
                        {!! $getMedia->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
<script>
    function deleteConfirmation(Id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + Id).submit();
            }
        });
    }
</script>
