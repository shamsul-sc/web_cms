@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Project List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.add') }}">Add New
                            Project</a>
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
                        {{-- <th>State</th> --}}
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getProject && $getProject->count())
                    @foreach ($getProject as $category )

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->project_title_bn }}</td>
                        <td>{!! $category->project_summary !!}</td>
                        <td>{{ $category->project_approx_budget }}</td>
                        <td><img src="/uploads/category/thumbnail/{{ $category->project_image }}" width="100px"></td>

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
                        <td class='d-flex'>
                            <a href="{{ route('dashboard.edit',$category->id ) }}" class="btn btn-sm btn-info ">Edit</a>

                            <a href="{{ route('dashboard.deleted', $category->id) }}" class="btn btn-sm btn-danger"
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