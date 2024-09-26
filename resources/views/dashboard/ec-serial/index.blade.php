@extends('admin_dashboard_includes.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @include('sweetalert::alert')
                <div class="card-header d-flex align-items-center" style="background-color: rgb(93, 198, 93);">
                    <h5 class="card-title flex-grow-1 mb-0 text-white">Excursion Committee Serial</h5>
                    <div class="flex-shrink-0">
                        <a class="btn btn-soft-info waves-effect waves-light text-black"
                            href="{{ route('ec-serial.create') }}">Add New Excursion Committee Serial</a>
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
                            <th>Id</th>
                            <th>Excursion Committee Serial Name</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($getEcSerial && $getEcSerial->count())
                            @forelse ($getEcSerial as $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->ec_name }}</td>
                                    <td>
                                        <span
                                            class="badge
                                {{ $value->status === 'Running' ? 'bg-info-subtle text-info' : 'bg-secondary-subtle text-success' }}">
                                            {{ $value->status === 'Running' ? 'Running' : 'Finished' }}
                                        </span>
                                    </td>
                                    <td>{{ date('d-m-Y h:i:A', strtotime($value->start_date)) }}</td>
                                    <td>{{ date('d-m-Y h:i:A', strtotime($value->end_date)) }}</td>

                                    <td class='d-flex  gap-1'>
                                        <a href="{{ route('ec-serial.edit', $value->id) }}"
                                            class="btn btn-sm btn-info ">Edit</a>

                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        @else
                            <tr>
                                <td class="text-center" colspan="8">No records found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <div></div>
                    <div class="d-flex justify-content-end">
                        {!! $getEcSerial->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
