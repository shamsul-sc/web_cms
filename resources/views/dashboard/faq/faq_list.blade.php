@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">FAQ List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.faq_add') }}">Add New
                            FAQ </a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id.</th>
                        <th>FAQ Cat.Id.</th>
                        <th>Question BN.</th>
                        <th>Answer BN.</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getFaq && $getFaq->count())
                    @foreach ($getFaq as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->faq_cat_id }}</td>
                        <td>{{ $value->question_bn }}</td>
                        <td>{{ $value->answer_bn }}</td>
                        <td>{{ $value->question }}</td>
                        <td>{{ $value->answer }}</td>
                        <td>{{ $value->position }}</td>
                        <td>
                            <span
                                class="badge
                                {{ $value->status === 'Show' ? 'bg-info-subtle text-success' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                        <td class='d-flex'>
                            <a href="{{ route('dashboard.faq_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>
                            <a href="{{ route('dashboard.faq_deleted', $value->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
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