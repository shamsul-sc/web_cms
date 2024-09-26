@extends('admin_dashboard_includes.app')
@section('content')

<div class="position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg profile-setting-img">
        <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
        <div class="overlay-content">
            <div class="text-end p-3">
                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                    <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                    <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                        <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-3">
        <div class="card mt-n5">
            <div class="card-body p-4">
                <div class="text-center">
                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                        @if($getUserProfile && $getUserProfile->profile_image )
                        <img src="{{ asset('/uploads/profile_image/thumbnail/' . $getUserProfile->profile_image ) }}"
                            class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt=" Image" width="70">
                        @endif
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                <span class="avatar-title rounded-circle bg-light text-body">
                                    <i class="ri-camera-fill"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                    <h5 class="fs-16 mb-1">{{ $getUser->name}}</h5>
                    <p class="text-muted mb-0">Lead Designer / Developer</p>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card mt-xxl-n5">
            <div class="card-header">
                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                            <i class="fas fa-home"></i> Personal Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                            <i class="far fa-user"></i> Change Password
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                        <form action="{{ route('dashboard.users_profile_updated',$getUser->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your name" value="{{ old('name',$getUser->name) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phonenumberInput" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phonenumberInput" name="mobile_no"
                                            placeholder="Enter your phone number"
                                            value="{{ old('mobile_no',$getUser->mobile_no) }}">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailInput" name="email"
                                            placeholder="Enter your email" value="{{ old('email',$getUser->email) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="numberInput" class="form-label">NID Number</label>
                                        <input type="text" class="form-control" id="nid_number" name="nid_number"
                                            placeholder="Enter your nid number"
                                            value="{{ old('nid_number',$getUserProfile->nid_number) }}">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nameInput" class="form-label">Father Name</label>
                                        <input type="text" class="form-control" id="father_name" name="father_name"
                                            placeholder="Enter your father name"
                                            value="{{ old('father_name',$getUserProfile->father_name) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nameInput" class="form-label">Mother Name</label>
                                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                                            placeholder="Enter your mother name"
                                            value="{{ old('mother_name',$getUserProfile->mother_name) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="bloodgroupInput" class="form-label">Blood Group</label>
                                        <input type="text" class="form-control" id="blood_group" name="blood_group"
                                            placeholder="Enter your blood group name"
                                            value="{{ old('blood_group',$getUserProfile->blood_group) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="genderInput" class="form-label">Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value="" disabled {{ old('gender', $getUserProfile->gender) === null
                                                ?
                                                'selected'
                                                :
                                                '' }}>
                                                Select Gender
                                            </option>
                                            <option value="Male" {{ old('gender', $getUserProfile->gender) == 'Male' ?
                                                'selected' :
                                                ''
                                                }}>Male</option>
                                            <option value="Female" {{ old('gender', $getUserProfile->gender) == 'Female'
                                                ?
                                                'selected' :
                                                ''
                                                }}>Female</option>
                                            <option value="Others" {{ old('gender', $getUserProfile->gender) == 'Others'
                                                ?
                                                'selected' :
                                                ''
                                                }}>Others</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="profile_image">Profile Image</label>
                                        <input type="file" id="profile_image" name="profile_image" class="form-control"
                                            placeholder="" maxlength="255">
                                        @if($getUserProfile && $getUserProfile->profile_image )
                                        <img src="{{ asset('/uploads/profile_image/thumbnail/' . $getUserProfile->profile_image ) }}"
                                            alt=" Image" width="70">
                                        @endif
                                        <br>
                                        <small class="form-text text-muted">Please Upload square size image.</small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="addressInput" class="form-label">Present Address</label>
                                        <input type="text" class="form-control" id="present_address"
                                            name="present_address" placeholder="Enter your pressent address"
                                            value="{{ old('present_address',$getUserProfile->present_address) }}">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="dateInput" class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                            placeholder="Enter your birthday date"
                                            value="{{ old('date_of_birth',$getUserProfile->date_of_birth) }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="hstack gap-2">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <button type="button" class="btn btn-soft-primary">Cancel</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="changePassword" role="tabpanel">
                        <form action="javascript:void(0);">
                            <div class="row g-2">
                                <div class="col-lg-4">
                                    <div>
                                        <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                        <input type="password" class="form-control" id="oldpasswordInput"
                                            placeholder="Enter current password">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div>
                                        <label for="newpasswordInput" class="form-label">New Password*</label>
                                        <input type="password" class="form-control" id="newpasswordInput"
                                            placeholder="Enter new password">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div>
                                        <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                        <input type="password" class="form-control" id="confirmpasswordInput"
                                            placeholder="Confirm password">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <a href="javascript:void(0);"
                                            class="link-primary text-decoration-underline">Forgot Password ?</a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Change Password</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                        <div class="mt-4 mb-3 border-bottom pb-2">
                            <div class="float-end">
                                <a href="javascript:void(0);" class="link-primary">All Logout</a>
                            </div>
                            <h5 class="card-title">Login History</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-smartphone-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>iPhone 12 Pro</h6>
                                <p class="text-muted mb-0">Los Angeles, United States - March 16 at 2:47PM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-tablet-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Apple iPad Pro</h6>
                                <p class="text-muted mb-0">Washington, United States - November 06 at 10:43AM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-smartphone-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Galaxy S21 Ultra 5G</h6>
                                <p class="text-muted mb-0">Conneticut, United States - June 12 at 3:24PM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-macbook-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Dell Inspiron 14</h6>
                                <p class="text-muted mb-0">Phoenix, United States - July 26 at 8:10AM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
