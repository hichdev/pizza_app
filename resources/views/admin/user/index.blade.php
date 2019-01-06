@extends('layouts.app')

@section('content')

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Gebruikers Lijst</h4>
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

                        <div class="page-wrapper">

                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5></h5>
                                                <span>Hieronder vindt je een lijst van alle gebruikers die zich hebben aangemeld. Inclusief de administrators en koeriers.</span>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="order-table" class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>Voornaam</th>
                                                            <th>Achternaam</th>
                                                            <th>Email</th>
                                                            <th>Rol</th>
                                                            <th></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($adminusers as $user)
                                                        <tr>
                                                            <td>{{ $user->firstname }}</td>
                                                            <td>{{ $user->lastname }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->role->name }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.users.edit', ['id' => $user->id]) }}" class="btn btn-primary waves-effect waves-light btn-block">Wijzig profiel</a>

                                                        </tr>


                                                        @endforeach

                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <th>Voornaam</th>
                                                            <th>Achternaam</th>
                                                            <th>Email</th>
                                                            <th>Rol</th>
                                                            <th></th>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center pagination">

                                                {{ $adminusers->links() }}

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