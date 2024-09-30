@extends('admin_dashboard_includes.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @include('sweetalert::alert')
                <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                    <h5 class="card-title flex-grow-1 mb-0 text-white">Category List</h5>
                    <div class="flex-shrink-0">
                        <a id=""class="btn btn-soft-info waves-effect waves-light text-black loadButton"
                            href="{{ route('dashboard.category_add') }}">Add New
                            Category</a>
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
                            <th>ID</th>
                            <th>Category Name BN.</th>
                            <th>Slug</th>
                            <th>Serial</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($getRecord && $getRecord->count())
                            @forelse ($getRecord as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->category_name_bn }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->serial }}</td>
                                    <td>
                                        <span
                                            class="badge
                                {{ $category->status === 'show' ? 'bg-info-subtle text-success' : 'bg-secondary-subtle text-warning' }}">
                                            {{ $category->status === 'show' ? 'Show' : 'Hide' }}
                                        </span>
                                    </td>
                                    <td>{{ date('d-m-Y h:i:A', strtotime($category->created_at)) }}</td>
                                    <td class='mt-4'>
                                        <a href="{{ route('dashboard.category_edit', $category->id) }}"
                                            class="btn btn-sm btn-info loadButton">Edit</a>

                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                            onclick="deleteConfirmation({{ $category->id }})">Delete</a>

                                        <form id="delete-form-{{ $category->id }}"
                                            action="{{ route('dashboard.category_deleted', $category->id) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center" <td colspan="100%">Record not found.</td>
                                </tr>
                            @endforelse
                        @else
                            <tr>
                                <td colspan="100%">Record not found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <div></div>
                    <div class="d-flex justify-content-end">
                        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
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
