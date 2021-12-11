@extends('layouts.auth')

@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-6 p-4 mx-auto my-auto">
                        
                        <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-danger">Register</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id"><strong>Full Name</strong></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="email" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" />
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id"><strong>Contact</strong></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="" class="form-control @error('contact') is-invalid @enderror" name="contact" placeholder="07** *** ***"/>
                                                        @error('contacts')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id"><strong>Email Address</strong></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" />
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id"><strong>Gender</strong></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select name="gender" class="form-control">
                                                            <option selected="" readonly="" >--GENDER--</option>
                                                            <option value="F">Female</option>
                                                            <option value="M">Male</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="email-id"><strong>Role</strong></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select name="role" class="form-control">
                                                            <option selected="" readonly="" >--ROLE--</option>
                                                            <option value="2">Administrator</option>
                                                            <option value="3">Supervisor</option>
                                                            <option value="4">Driver</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="password"><strong>Password</strong> </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label" for="password-confirm"><strong>Confirm Password</strong> </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="password" id="password-confirm" class="form-control" name="password_confirm"  placeholder="Confirm Password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary me-1">Register</button>
                                                <a href="{{ route('login') }}" class="btn btn-outline-danger">Back to Login</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
