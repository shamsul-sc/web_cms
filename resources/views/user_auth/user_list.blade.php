@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title flex-grow-1 mb-0 text-white">User List</h5>
                <div class="flex-shrink-0">
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
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if($getUser && $getUser->count())
                    @forelse ($getUser as $user )

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->mobile_no }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span
                                class="badge
                                {{ $user->is_role === 'admin' ? 'bg-info-subtle text-info' : ($user->is_role === 'stuff' ? 'bg-secondary-subtle text-warning' : 'bg-success-subtle text-success') }}">
                                {{ $user->is_role === 'admin' ? 'Admin' : ($user->is_role === 'stuff' ?
                                'Stuff' : 'User')
                                }}
                            </span>
                        </td>
                        <td>
                            <span
                                class="badge
                                {{ $user->status === 'enabled' ? 'bg-info-subtle text-info' : ($user->status === 'block' ? 'bg-secondary-subtle text-danger' : 'bg-success-subtle text-success') }}">
                                {{ $user->status }}
                            </span>
                        </td>

                        <td>{{ date('d-m-Y h:i:A', strtotime($user->created_at)) }}</td>

                        <td class='d-flex mt-2'>
                            @if($user->status == 'enabled')
                            <a href="{{ route('dashboard.users_details',$user->id ) }}"
                                class="btn btn-sm btn-primary">Details</a>
                            <a href="{{ route('dashboard.project_edit',$user->id ) }}"
                                class="btn btn-sm btn-info">Edit</a>
                            <a href="{{ route('dashboard.user_block',$user->id ) }}"
                                class="btn btn-sm btn-danger">Block</a>
                            @elseif($user->status == 'pending' || $user->status == 'block' )
                            <a href="{{ route('dashboard.user_activate',$user->id ) }}"
                                class="btn btn-sm btn-primary">Activate</a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="100%">Record not found.</td>
                    </tr>
                    @endforelse
                    @endif

                </tbody>
            </table>
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