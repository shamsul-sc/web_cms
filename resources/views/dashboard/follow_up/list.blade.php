@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Follow Up List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.follow_up_add') }}">Add New
                            Follow Up</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Follow Up Title BN.</th>
                        <th>Follow Up Date</th>
                        <th>Case Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getFollowUp && $getFollowUp->count())
                    @foreach ($getFollowUp as $value )

                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{!! $value->follow_up_title_bn !!}</td>
                        <td>{{ date('d-m-Y h:i:A', strtotime($value->follow_up_title_bn)) }}</td>
                        <td><img src="/uploads/follow_up_image/thumbnail/{{ $value->follow_up_image }}" width="100px">
                        </td>

                        <td>
                            <span
                                class="badge
                                {{ $value->status === 'Show' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $value->status === 'Show' ? 'Show' : 'Hide' }}
                            </span>
                        </td>

                        <td class='d-flex'>
                            <a href="{{ route('dashboard.follow_up_edit',$value->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="{{ route('dashboard.follow_up_deleted', $value->id) }}"
                                class="btn btn-sm btn-danger"
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
