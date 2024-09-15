@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title flex-grow-1 mb-0 text-white">Project List</h5>
                <div class="flex-shrink-0">
                    <a class="btn btn-soft-info waves-effect waves-light text-black"
                        href="{{ route('dashboard.project_add') }}">Add New
                        Project</a>

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
                        <th>Category Name</th>
                        <th>Project Title BN.</th>
                        <th>Project Summary BN</th>
                        <th>Project Approx Budget</th>
                        <th>Project Image</th>
                        <th>Joint Project</th>
                        <th>Featured Project</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if($getProject && $getProject->count())
                    @forelse ($getProject as $category )

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->project_title_bn }}</td>
                        <td>{!! $category->project_summary_bn !!}</td>
                        <td>{{ number_format($category->project_approx_budget) }}</td>
                        <td><img src="/uploads/project_image/thumbnail/{{ $category->project_image }}" width="100px">
                        </td>

                        <td>
                            <span
                                class="badge
                                {{ $category->joint_project === 'Yes' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $category->joint_project === 'Yes' ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td>
                            <span
                                class="badge
                                {{ $category->featured_project === 'Yes' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $category->featured_project === 'Yes' ? 'Yes' : 'No' }}
                            </span>
                        </td>

                        <td>
                            <span
                                class="badge
                                {{ $category->status === 'Show' ? 'bg-info-subtle text-success' : 'bg-secondary-subtle text-warning' }}">
                                {{ $category->status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($category->created_at)) }}</td>

                        <td class='d-flex mt-4'>
                            <a href="{{ route('dashboard.project_edit',$category->id ) }}"
                                class="btn btn-sm btn-info">Edit</a>

                            <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                onclick="deleteConfirmation({{ $category->id }})">Delete</a>

                            <form id="delete-form-{{ $category->id }}"
                                action="{{ route('dashboard.project_deleted', $category->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
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
            <div class="d-flex justify-content-between">
                <div></div>
                <div class="d-flex justify-content-end">
                    {!! $getProject->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

<script>
    function deleteConfirmation(categoryId) {
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
            document.getElementById('delete-form-' + categoryId).submit();
        }
    });
}
</script>