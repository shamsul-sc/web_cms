@extends('admin_dashboard_includes.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                <h5 class="card-title flex-grow-1 mb-0 text-white">Case Study List</h5>
                <div class="flex-shrink-0">
                    <a class="btn btn-soft-info waves-effect waves-light text-black"
                        href="{{ route('dashboard.case_study_add') }}">Add New
                        Case Study</a>
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
            <table id="scroll-vertical"
                class="table table-bordered dt-responsive nowrap align-middle mdl-data-table text-center"
                style="width:100%">
                <thead>
                    <tr class="text-nowrap py-2">
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
                    @forelse ($getCaseStudy as $case_study )

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
                        <td>{{ date('d-m-Y h:i:A', strtotime($case_study->created_at)) }}</td>
                        <td class='d-flex align-items-center mt-4 gap-1'>
                            <a href="{{ route('dashboard.case_study_edit',$case_study->id ) }}"
                                class="btn btn-sm btn-info ">Edit</a>

                            <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                onclick="deleteConfirmation({{ $case_study->id }})">Delete</a>
                            <form id="delete-form-{{ $case_study->id }}"
                                action="{{ route('dashboard.case_study_deleted', $case_study->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                        @empty
                    <tr>
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
                    {!! $getCaseStudy->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
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
