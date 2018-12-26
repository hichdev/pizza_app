@extends('layouts.app')

@section('content')


    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Product List</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Product list card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Product List</h5>
                                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary waves-effect waves-light float-right d-inline-block md-trigger" data-modal="modal-13"> <i class="icofont icofont-plus m-r-5"></i> Nieuw product</a>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div class="table-content">
                                            <div class="project-table">
                                                <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Afbeelding</th>
                                                        <th>Product info</th>
                                                        <th>Categorie</th>
                                                        <th>Prijs</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($products as $product)
                                                        <tr>
                                                            <td class="pro-list-img">
                                                                <img src="{{ $product->picture }}" class="img-fluid" alt="tbl" width="64px">
                                                            </td>
                                                            <td class="pro-name">
                                                                <h6><a href="{{ route('admin.product.edit', $product->id) }}">{{ $product->name }}</a>  </h6>
                                                                <span>{{ $product->description }}</span>
                                                            </td>
                                                            <td>{{ $product->category->name }}</td>
                                                            <td>
                                                                <label >€ {{ $product->price }}</label>
                                                            </td>
                                                            <td class="action-icon">
                                                                <a href="{{ route('admin.product.delete', ['id' => $product->id]) }}" class="btn btn-danger waves-effect waves-light btn-block">Verwijder product</a>
                                                            </td>
                                                        </tr>




                                                    @endforeach




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product list card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
    </div>
    </div>
    <!-- Main-body end -->


@endsection