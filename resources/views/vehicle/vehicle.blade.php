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
                            <h2 class="content-header-title float-start mb-0">Home Page</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <a href="/vehicle/create" class="btn btn-info">Add New Vehicle</a>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Vehicle Model</th>
                                    <th>Plate Number</th>
                                    <th>Colour</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicles as $key => $veh)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $veh->model }}</td>
                                    <td>{{ $veh->plate_no }}</td>
                                    <td>{{ $veh->colour }}</td>
                                    @if($veh->status == 0)
                                    <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                                    @elseif($veh->status == 1)
                                    <td><span class="badge rounded-pill badge-light-success me-1">Available</span></td>
                                    @elseif($veh->status == 2)                                    
                                    <td><span class="badge rounded-pill badge-light-info me-1">On Trip</span></td>@elseif($veh->status == 4)
                                    <td><span class="badge rounded-pill badge-light-primary me-1">Waiting For Approval</span></td>
                                    @elseif($veh->status == 3)
                                    <td><span class="badge rounded-pill badge-light-danger me-1">Repair Mode</span></td>
                                    @endif
                                    <td><a href="" data-bs-toggle="modal" data-bs-target="#defaultSize{{ $veh->id }}" class="btn btn-primary btn-sm">View More Details</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>








@foreach($vehicles as $veh)
              <!-- Modal -->
<div class="modal fade text-start" id="defaultSize{{ $veh->id }}" tabindex="-1" aria-labelledby="myModalLabel18" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel18">Default Modal</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <table class="table table-responsive table-bordered">
        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Vehicle Type </strong>
            </td>
            <td style="width:50%" id="VehicleType">{{$veh->veh_type->type}}</td>
        </tr>

        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Brand </strong>
            </td>
            <td style="width:50%" id="VehicleName">{{$veh->brd->brand}}</td>
        </tr>

        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Make/Model </strong>
            </td>
            <td style="width:50%" id="MakeModel">{{$veh->model}}</td>
        </tr>

        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Purchase Date </strong>
            </td>
            <td style="width:50%" id="YearofManufacture">{{$veh->purchase_date}}</td>
        </tr> 

        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Registration Number </strong>
            </td>
            <td style="width:50%" id="RegistrationNumber">{{$veh->plate_no}}</td>
        </tr>
        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Engine Number </strong>
            </td>
            <td style="width:50%" id="EngineNumber">{{$veh->engine_no}}</td>
        </tr>

        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Chassis Number </strong>
            </td>
            <td style="width:50%" id="ChassisNumber">{{$veh->chassis_no}}</td>
        </tr>
        <tr>
            <td style="width:50%;background-color: #e8e8e8;">
                <strong> Vehicle Image </strong>
            </td>
            <td style="width:50%">
                <img  id="VehicleImage" src="{{ asset('images/' . $veh->image)}}" style="height:150px;width:150px;"/>
            </td>
        </tr>
    </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
    </div>
  </div>
</div>
</div>

@endforeach

@endsection
