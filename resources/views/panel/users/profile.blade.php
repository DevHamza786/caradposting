@extends('panel.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid bg-white" id="kt_content">
        <div class="card-header border-0 pt-6">
            <!--begin::Card toolbar-->
            <div class="card-toolbar d-flex justify-content-between">
                <h1 class="anchor fw-bolder mb-5 px-4">Profile</h1>
            </div>
            <!--end::Card toolbar-->
            <hr>
        </div>
        <div id="kt_content_container" class="container-xxl">
            <div class="modal-body">
                <!--begin::Scroll-->
                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                    data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                    data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px"
                    style="">
                    <!--begin::Input group-->
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        <div class="row">
                            <div class="fv-row mb-7 fv-plugins-icon-container col-6">
                                <label class="required fs-6 fw-bold mb-2">Name</label>
                                <input type="hidden" name="user_id" value="{{ $user->id }}" required>
                                <input type="text" class="form-control" placeholder="Username" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="fv-row mb-7 fv-plugins-icon-container col-6">
                                <label class="required fs-6 fw-bold mb-2">Email</label>
                                <input type="email" class="form-control form-control-solid" placeholder="Email" name="email" value="{{ $user->email }}" readonly disabled>
                            </div>
                            <div class="fv-row mb-7 fv-plugins-icon-container col-6">
                                <label class="required fs-6 fw-bold mb-2">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" value="{{ $user->phone }}" required>
                            </div>
                            <div class="fv-row mb-7 fv-plugins-icon-container col-6">
                                <label class="required fs-6 fw-bold mb-2">New Password</label>
                                <input type="password" class="form-control" placeholder="Enter New Password" name="password" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
                <!--end::Scroll-->
            </div>
        </div>
    </div>
@endsection
