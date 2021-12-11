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
                            <h2 class="content-header-title float-start mb-0">Make A Trip</h2>
                            
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
                                    <h4 class="card-title">Please the inputs with (*)</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('trip.store')}}" class="form form-vertical">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Vehicle Name *</strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="vehicle" name="vehicle">
                                                            <option selected="" readonly="">--VEHICLE NAME--</option>
                                                            @foreach($vehicles as $veh)
                                                            <option value="{{$veh->id}}">{{$veh->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>From</strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="driver" name="from">
                                                            <option selected="" readonly="">--FROM--</option>\
                                                            @foreach($locations as $user)
                                                            <option value="{{$user->id}}" >{{$user->location}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>To</strong></label>
                                                    <select class="form-control" id="driver" name="to">
                                                        <option selected="" readonly="">--TO--</option>\
                                                        @foreach($locations as $user)
                                                        <option value="{{$user->id}}" >{{$user->location}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Date of Trip *</strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="date" id="date_of_trip" class="form-control" name="date_of_trip" placeholder="Purchase Date" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Returning Date *</strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="date" id="return_date" class="form-control" name="return_date" placeholder="Purchase Date" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Purpose of the Trip *</strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <textarea class="form-control" name="purpose"></textarea>
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
