@extends('layouts.main')
@section('css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.css">
@endsection
@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Asset Analytics</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Current Owner</th>
                                    <th>Asset Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($assets as $key => $veh)
                                <tr>
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $veh->stafff->full_name }}</td>
                                    <td><b>{{ $veh->itemm->item_name }}</b></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--div class="col-xl-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start">
                                <h4 class="card-title mb-75">Expense Ratio</h4>
                                <span class="card-subtitle text-muted">Spending on various categories </span>
                            </div>
                            <div class="card-body">
                                <div id="donut-chart"></div>
                            </div>
                        </div>
                    </div-->
                    <div class="col-xl-8 col-12">
                      <div id="donutchart" style="width: 900px; height: 500px;"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  @endsection

  @section('js')

  <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
</script>
    @endsection






