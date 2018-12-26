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
                                        <p>Alle velden hieronder zijn verplicht.</p>
                                    </div>

                                    @if(count($errors) > 0)

                                        <ul class="list-group">

                                            @foreach($errors->all() as $error)


                                                <li class="list-group-item text-danger">

                                                    {{ $error }}

                                                </li>


                                            @endforeach

                                        </ul>


                                    @endif

                                    <div class="card-block">
                                        <form action="{{ route('admin.users.store') }}" method="POST">

                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label for="firstname" class="col-sm-2 col-form-label">Voornaam</label>
                                                <div class="col-sm-10">
                                                    <input id="firstname" name="firstname" type="text" class="form-control form-control-normal"
                                                           placeholder="Geef een voornaam in">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lastname" class="col-sm-2 col-form-label">Achternaam</label>
                                                <div class="col-sm-10">
                                                    <input id="lastname" name="lastname" type="text" class="form-control form-control-normal"
                                                           placeholder="Geef een achternaam in">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input id="email" name="email" type="email" class="form-control form-control-normal"
                                                           placeholder="Geef een email adres in">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">Kies een wachtwoord</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" id="password" class="form-control"
                                                           placeholder="Kies een wachtwoord">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Rol</label>
                                                <div class="col-sm-10">
                                                    <select name="role_id" class="form-control">


                                                        @foreach($roles as $role)

                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>

                                                        @endforeach



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-2"> </div>

                                                <div class="col-sm-10">
                                                    <button class="btn btn-primary waves-effect waves-light " type="submit" >Aanmaken</button>
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



