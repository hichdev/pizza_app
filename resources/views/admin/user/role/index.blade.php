@extends('layouts.app')

@section('content')

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Admin rollen</h4>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="feather icon-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="page-wrapper">

                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5></h5>
                                                <span>Hieronder vindt je een lijst van alle rollen die je kan gebruiken voor de admin gebruikers.</span>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="order-table" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>Rolnaam</th>
                                                            <th>Verwijder</th>


                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($roles as $role)
                                                            <tr>
                                                                <td>{{ $role->name }}</td>
                                                                <td>Wijzig profiel</td>
                                                            </tr>


                                                        @endforeach


                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th>Rolnaam</th>
                                                            <th>Verwijder</th>


                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection