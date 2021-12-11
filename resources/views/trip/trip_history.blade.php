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
                    <a href="/trip/create" class="btn btn-info">Make A New Trip</a>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Trip Code</th>
                                    <th>Vehicle Model</th>
                                    <th>From</th>
                                    <th>Destination</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($trips) < 1)
                                    <tr class="mx-auto"><td><b><center>-----</center></b></td></tr>
                                @else
                                @foreach($trips as $key => $veh)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $veh->trip_code }}</td>
                                    <td>{{ $veh->vehice->model }}</td>
                                    <td>{{ $veh->loc_from->location }}</td>
                                    <td>{{ $veh->loc_to->location }}</td>
                                    <td><a href="" data-bs-toggle="modal" data-bs-target="#defaultSize{{ $veh->id }}" class="btn btn-primary btn-sm">View Purpose For Travel</a></td>
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








@foreach($trips as $veh)
              <!-- Modal -->
<div class="modal fade text-start" id="defaultSize{{ $veh->id }}" tabindex="-1" aria-labelledby="myModalLabel18" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel18">Purpose For Travel</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <p>{{ $veh->purpose }}</p>
    </div>
    <div class="modal-footer">
      <a href="{{ route('endTrips', $veh->id)}}" class="btn btn-danger">End Trip</a>
    </div>
  </div>
</div>
</div>

@endforeach

@endsection
