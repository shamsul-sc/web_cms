@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">FAQ Category List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.faq_category_add') }}">Add New
                            FAQ Category</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id.</th>
                        <th>FAQ Cat.Id.</th>
                        <th>FAQ Category Name</th>
                        <th>FAQ Category Name BN.</th>
                        <th>Serial</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getFaqCategory && $getFaqCategory->count())
                    @foreach ($getFaqCategory as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->faq_cat_id }}</td>
                        <td>{{ $value->faq_cat_name }}</td>
                        <td>{{ $value->faq_cat_name_bn }}</td>
                        <td>{{ $value->faq_cat_serial }}</td>
                        <td>
                            <span
                                class="badge
                                {{ $value->faq_cat_status === 'Show' ? 'bg-info-subtle text-success' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->faq_cat_status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($value->created_at)) }}</td>
                        <td>
                            <a href="{{ route('dashboard.faq_category_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>
                            <a href="{{ route('dashboard.faq_category_deleted', $value->id) }}"
                                class="btn btn-sm btn-danger">Delete</a>
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