@extends('layouts.app')

@section('content')

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Maak een nieuwe gebruiker aan</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <!-- [ page content ] start -->
                        <div class="row">
                            <div class="col-sm-12">

                                <!-- Input Alignment card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Input Alignment</h5>
                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                    </div>
                                    <div class="card-block">
                                        <form action="/users/store" method="POST">

                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Normal Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-normal"
                                                           placeholder=".form-control-normal">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Bold Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-bold"
                                                           placeholder=".form-control-bold">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Capitalize Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control form-control-capitalize"
                                                           placeholder=".form-control-capitalize">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Uppercase Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control form-control-uppercase"
                                                           placeholder=".form-control-uppercase">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Lowercase Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control form-control-lowercase"
                                                           placeholder=".form-control-lowercase">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Varient Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-variant"
                                                           placeholder=".form-control-variant">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Left-Align Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-left"
                                                           placeholder=".form-control-left">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Center-Align Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-center"
                                                           placeholder=".form-control-center">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Right-Align Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-right"
                                                           placeholder=".form-control-right">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">RTL Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-rtl"
                                                           placeholder=".form-control-rtl">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Input Alignment card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
    </div>
                        <!-- [ page content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



