@extends('layouts.main')

@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Add A Staff Member</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    
                </div>
            </div>
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-md-8 col-12 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Please the inputs with<b class="text-danger">*</b></h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('staff.store')}}" class="form form-vertical">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Full Name<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="full_name" class="form-control" name="full_name" placeholder="Full Name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Email Address<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="full_name" class="form-control" name="email" placeholder="user@pharo.com" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Contact Information<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="contact" class="form-control" name="contact" placeholder="Contact Information" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Role<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="role" name="role">
                                                            <option selected="" readonly="">--ROLE--</option>
                                                            <option value="2" >Administrator</option>
                                                            <option value="3" >Supervisor</option>
                                                            <option value="4" >Driver</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Gender<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="gender" name="gender">
                                                            <option selected="" readonly="">--GENDER--</option>
                                                            <option value="M" >Male</option>
                                                            <option value="F" >Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
