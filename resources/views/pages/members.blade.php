@extends('layouts.default')

@section('title', 'Albums | Treatment Community Foundation')

@section('content')

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-6 m-0"
        style="background-image: url('{{ asset('img/backgrounds/background-4.webp') }}'); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-color-light font-weight-bold text-10">{{ __('custom_lang.general_member') }}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5 my-4">
        <div class="col-lg-12 mb-3">
            <form action="{{ route('member.search') }}" method="GET" class="mb-3">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by name"
                        value="{{ request()->input('search') }}">
                    <div class="text-right">
                        <button id="loading_btn" class="btn btn-block btn-primary" type="submit">
                            <i class="loading-icon fa-lg fas fa-spinner fa-spin hide d-none"></i> &nbsp;
                            <i class="czi-user mr-2 ml-n1"></i>
                            <span class="btn-txt">Search</span>
                        </button>
                    </div>
                </div>
        </div>
        </form>
        <div class="table-responsive">
            <table class="shop_table cart">
                <thead>
                    <tr class="text-color-dark">
                        <th>SL.</th>
                        <th class="product-thumbnail" width="15%">Image
                            &nbsp;
                        </th>
                        <th>Name</th>
                        <th>Blood Group</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($getUserProfile as $index => $userProfile)
                        <tr class="cart_table_item">
                            <td>{{ $getUserProfile->firstItem() + $index }}</td>

                            <td class="product-thumbnail">
                                <div class="product-thumbnail-wrapper">
                                    <a href="shop-product-sidebar-right.html" class="product-thumbnail-image"
                                        title="{{ $userProfile->name }}">
                                        @if (
                                            !empty($userProfile->profile_image) &&
                                                file_exists(public_path('uploads/profile_image/thumbnail/' . $userProfile->profile_image)))
                                            <img width="90" height="90"
                                                alt="{{ $userProfile->name }}'s Profile Image" class="img-fluid"
                                                src="{{ asset('uploads/profile_image/thumbnail/' . $userProfile->profile_image) }}">
                                        @else
                                            <img width="90" height="90"
                                                alt="No image available for {{ $userProfile->name }}" class="img-fluid"
                                                src="{{ asset('img/No-Image-Placeholder.svg') }}">
                                        @endif
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="shop-product-sidebar-right.html"
                                    class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">
                                    {{ $userProfile->name }}
                                </a>
                            </td>

                            <td>
                                {{ $userProfile->blood_group ?? 'N/A' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="8">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    @if ($getUserProfile->count())
                        Showing {{ $getUserProfile->firstItem() }} to {{ $getUserProfile->lastItem() }} of
                        {{ $getUserProfile->total() }} results
                    @else
                        <span>No records found.</span>
                    @endif
                </div>
                <div class="d-flex justify-content-end">
                    {!! $getUserProfile->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                </div>
            </div>

        </div>

    </div>
    </div>

@stop
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $("#loading_btn").on("click", function() {
            $(".loading-icon").removeClass("d-none");

        });

    });
</script>
