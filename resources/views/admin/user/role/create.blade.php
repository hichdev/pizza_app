@extends('layouts.app')

@section('content')



    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Maak een nieuwe rol aan.</h4>
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
                                        <form action="{{ route('admin.users.role.store') }}" method="POST">

                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Rolnaam</label>
                                                <div class="col-sm-10">
                                                    <input id="name" name="name" type="text" class="form-control form-control-normal"
                                                           placeholder="Geef een rolnaam in">
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



