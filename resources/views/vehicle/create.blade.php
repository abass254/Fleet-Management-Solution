@extends('layouts.main')
@section('css')

<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/animate/animate.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/sweetalert2.d.ts">


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
                            <h2 class="content-header-title float-start mb-0">Add new vehicle</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    @if(count($errors) > 0)
                    <div id="ERROR_COPY" style="display: none;" class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
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
                                    <form method="POST" action="{{ route('vehicle.store')}}" class="form form-vertical" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <!-- 'name', 'year' ,  'selling_price',   'km_driven' ,      , 'mileage' ,'engine' , 'max_power'  , 'torque'  ,'seats'  , 'image', 'colour' -->
                                            
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Vehicle Name <b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="model" class="form-control" name="name" placeholder="Name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Year of Manufacture <b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="plate_no" class="form-control" name="year" placeholder="2000-3000" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Buying Price<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="chassis_no" class="form-control" name="selling_price" placeholder="Chassis No" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>KM Driven<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="engine_no" class="form-control" name="km_driven" placeholder="Engine No" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Mileage<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="insurance_company" class="form-control" name="mileage" placeholder="Insurance Company" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Engine<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="policy_no" class="form-control" name="engine" placeholder="cc" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Torque<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="policy_no" class="form-control" name="torque" placeholder="Torque" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>No of Seats<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="policy_no" class="form-control" name="seats" placeholder="No of Seats" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Max Power<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="purchase_date" class="form-control" name="max_power" placeholder="Max-Power" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Colour<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="colour" class="form-control" name="colour" placeholder="Colour" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Transmission<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="brand" name="brand">
                                                            <option selected="" readonly="">--TRANSMISSION--</option>
                                                            <option value="1" >Automatic</option>
                                                            <option value="2" >Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Purchase Type<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="brand" name="brand">
                                                            <option selected="" readonly="">--PURCHASE-TYPE--</option>
                                                            <option value="1" >Dealer</option>
                                                            <option value="2" >Individual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Ownership<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="vehicle_type" name="vehicle_type">
                                                            <option selected="" readonly="">--OWNERSHIP--</option>
                                                            <option value="1" >First Hand</option>
                                                            <option value="2" >Second Hand</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Fuel Type<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="vehicle_type" name="vehicle_type">
                                                            <option selected="" readonly="">--FUEL-TYPE--</option>
                                                            <option value="1" >Diesel </option>
                                                            <option value="2" >Petrol</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Image<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="file" id="image" class="form-control" name="image" placeholder="Model" />
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

@section('js')

<script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/sweetalert2.d.ts"></script>
<script>
    

    swal ({
        title: 'Errors',
        type: 'error',
        html: jQuery('ERROR_COPY').html(),
        showCloseButton: true,
    })
</script>
@endsection
