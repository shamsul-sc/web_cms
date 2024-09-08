@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('layouts._message')
            <div class="card-header" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title mb-0">Case Study List</h5>
            </div>
            <div class="card-body">
                <div class="col-sm-12  d-flex justify-content-between">
                    <div id="scroll-vertical_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="scroll-vertical"></label>
                    </div>
                    <div class="mt-2 p-2">
                        <a class="btn btn-sm btn-primary" href="{{ route('dashboard.case_study_add') }}">Add New
                            Case Study</a>
                    </div>
                </div>
            </div>
            <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table"
                style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Case Title BN.</th>
                        <th>Case Summary BN</th>
                        <th>Case Approx Budget</th>
                        <th>Case Image</th>
                        <th>Joint Project</th>
                        <th>Featured Project</th>
                        <th>State</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($getCaseStudy && $getCaseStudy->count())
                    @foreach ($getCaseStudy as $case_study )

                    <tr>
                        <td>{{ $case_study->id }}</td>
                        <td>{{ $case_study->case_title_bn }}</td>
                        <td>{!! $case_study->case_summary_bn !!}</td>
                        <td>{{ $case_study->case_approx_budget }}</td>
                        <td><img src="/uploads/case_image/thumbnail/{{ $case_study->case_image }}" width="100px"></td>

                        <td>
                            <span
                                class="badge
                                {{ $case_study->urgent_case === 'Yes' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $case_study->urgent_case === 'Yes' ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td>
                            <span
                                class="badge
                                {{ $case_study->featured_case === 'Yes' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-warning' }}">
                                {{ $case_study->featured_case === 'Yes' ? 'Yes' : 'No' }}
                            </span>
                        </td>

                        <td>
                            <span
                                class="badge
                                {{ $case_study->state === 'Planning' ? 'bg-info-subtle text-info' : ($case_study->state === 'Running' ? 'bg-secondary-subtle text-warning' : 'bg-success-subtle text-success') }}">
                                {{ $case_study->state === 'Planning' ? 'Planning' : ($case_study->state === 'Running' ?
                                'Running' : 'Finished')
                                }}
                            </span>
                        </td>
                        <td>{{ date('d-m-Y', strtotime($case_study->created_at)) }}</td>
                        <td class='d-flex'>
                            <a href="{{ route('dashboard.case_study_edit',$case_study->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="{{ route('dashboard.case_study_deleted', $case_study->id) }}"
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
