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
                            <h2 class="content-header-title float-start mb-0">List of Equipments</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <a href="/asset/create" class="btn btn-info">Add Equipment</a>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Purchase Date</th>
                                    <th>Purchase Price</th>
                                    <th>Item Type</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($asset) < 1)
                                    <tr class="mx-auto"><td><b><center>No equipments available</center></b></td></tr>
                                @else
                                @foreach($asset as $key => $veh)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $veh->item_code }}</td>
                                    <td>{{ $veh->item_name }}</td>
                                    <td>{{ $veh->date_purchase }}</td>
                                    <td>{{ $veh->purchase_price }}</td>
                                    <td>{{ $veh->type->asset_type }}</td>
                                    @if($veh->status == 0)
                                    <td><span class="badge rounded-pill badge-light-warning me-1">Available</span></td>
                                    @elseif($veh->status == 1)
                                    <td><span class="badge rounded-pill badge-light-success me-1">Assigned</span></td>
                                    @elseif($veh->status == 2)                                    
                                    <td><span class="badge rounded-pill badge-light-info me-1">On Repair</span>
                                    @endif
                                    <td><a href="" data-bs-toggle="modal" data-bs-target="#defaultSize{{ $veh->id }}" class="btn btn-primary btn-sm">View Item Description</a></td>
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








@foreach($asset as $veh)
              <!-- Modal -->
<div class="modal fade text-start" id="defaultSize{{ $veh->id }}" tabindex="-1" aria-labelledby="myModalLabel18" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel18">Item Description</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <p>{{ $veh->item_desc }}</p>
    </div>
  </div>
</div>
</div>

@endforeach

@endsection
