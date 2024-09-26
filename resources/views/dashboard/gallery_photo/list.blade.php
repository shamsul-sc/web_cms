@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title flex-grow-1 mb-0">Gellary Photo List</h5>
                <div class="flex-shrink-0">
                    <a class="btn btn-soft-info waves-effect waves-light text-black"
                        href="{{ route('dashboard.gallery_photo_add') }}">Add New
                        Gellary Photo</a>
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
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table "
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
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
                    @forelse ($getGalleryPhoto as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->caption }}</td>
                        <td>
                            @if(!empty($value->image) && file_exists(public_path('uploads/gallery_photo/thumbnail/' .
                            $value->image)))
                            <img src="{{ asset('uploads/gallery_photo/thumbnail/' . $value->image) }}" alt="Image"
                                width="100px">
                            @else
                            <p>No Image Available</p>
                            @endif
                        </td>
                        <td>{{ $value->serial }}</td>
                        <td>
                            <span
                                class="badge
                                {{ $value->status === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($value->created_at)) }}</td>
                        <td class='mt-4'>
                            <a href="{{ route('dashboard.gallery_photo_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                onclick="deleteConfirmation({{ $value->id }})">Delete</a>

                            <form id="delete-form-{{ $value->id }}"
                                action="{{ route('dashboard.gallery_photo_deleted', $value->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                        @empty
                    <tr class="text-center">
                        <td colspan="100%">Record not found.</td>
                    </tr>
                    @endforelse
                    @else
                    <tr>
                        <td colspan="100%">No records found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div></div>
                <div class="d-flex justify-content-end">
                    {!! $getGalleryPhoto->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
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