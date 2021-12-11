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
                            <h2 class="content-header-title float-start mb-0">Add An Equipment</h2>
                            
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
                                    <h4 class="card-title">Please the inputs with <b class="text-danger">*</b></h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('asset.store')}}" class="form form-vertical">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-4 col-md-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Item Code<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="item_code" class="form-control" name="item_code" placeholder="Item Code" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Item Name<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="item_name" class="form-control" name="item_name" placeholder="Item Name" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-xl-4 col-md-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Item Type <b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <select class="form-control" id="item_type" name="item_type">
                                                            <option selected="" readonly="">--Item Type--</option>
                                                            <option value="1" >Laptop</option>
                                                            <option value="2" >Desktop</option>
                                                            <option value="3" >Printer</option>
                                                            <option value="4" >Television</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Purchase Date<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="calendar"></i></span>
                                                        <input type="date" id="date_purchase" class="form-control" name="date_purchase" placeholder="Purchase Date" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Purchase Price<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="purchase_price" class="form-control" name="purchase_price" placeholder="0.00" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon"><strong>Item Description<b class="text-danger">*</b></strong></label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <textarea class="form-control" name="item_desc"></textarea>
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
