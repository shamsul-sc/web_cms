@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Category List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.category_add') }}">Add New
                            Category</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Category Name BN.</th>
                        <th>Slug</th>
                        <th>Serial</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getRecord && $getRecord->count())
                    @foreach ($getRecord as $category )

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
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
                        <td>
                            <a href="{{ route('dashboard.category_edit',$category->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>
                            <a href="{{ route('dashboard.category_deleted', $category->id) }}"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
                        </td>
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