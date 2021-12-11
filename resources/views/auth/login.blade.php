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
                                    <h4 class="card-title text-danger">Login</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
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
                                            <div class="col-sm-9 offset-sm-3">
                                                <div class="mb-1">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                        <label class="form-check-label" for="customCheck1">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary me-1">Login</button>
                                                <a href="{{ route('register') }}" class="btn btn-outline-danger">Register</a>
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
