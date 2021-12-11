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
                            <h2 class="content-header-title float-start mb-0">List of Staff Members</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <a href="/staff/create" class="btn btn-info">Add New Staff Member</a>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Full Name</th>
                                    <th>Contact</th>
                                    <th>Role</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($staffs) < 1)
                                    <tr class="mx-auto"><td><b><center>No staff available</center></b></td></tr>
                                @else
                                @foreach($staffs as $key => $veh)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $veh->full_name }}</td>
                                    <td>{{ $veh->contact }}</td>
                                    <td>{{ $veh->rolee->name ?? 'Not Assigned' }}</td>
                                    <td>{{ $veh->gender }}</td>
                                    @if($veh->status == 1)
                                    <td><span class="badge rounded-pill badge-light-warning me-1">Available</span></td>
                                    @elseif($veh->status == 2)
                                    <td><span class="badge rounded-pill badge-light-success me-1">Assigned</span></td>
                                    @endif
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#defaultSize{{ $veh->id }}" class="btn btn-primary btn-sm">More Action</a></td>
                                </tr>
                                @endforeach

                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
