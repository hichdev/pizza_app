@extends('layouts.app')

@section('content')

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Nieuw Product</h4>
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
                                        <p></p>
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
                                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">

                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Product naam</label>
                                                <div class="col-sm-10">
                                                    <input id="name" name="name" type="text" class="form-control form-control-normal"
                                                       placeholder="geef een product naam in"   >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="description" class="col-sm-2 col-form-label">Product beschrijving</label>
                                                <div class="col-sm-10">
                                                    <textarea id="description" name="description" type="text" class="form-control form-control-normal" rows="4" placeholder="bijv.: tomatensaus, kaas, kip,..."></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="price" class="col-sm-2 col-form-label">prijs</label>
                                                <div class="col-sm-2">
                                                    <input id="price" name="price" type="text" class="form-control form-control-normal"
                                                        placeholder="prijs in euro"   >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Upload Afbeelding</label>
                                                <div class="col-sm-10">
                                                    <input name="picture" type="file" class="form-control">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Categorie</label>
                                                <div class="col-sm-10">
                                                    <select name="category_id" class="form-control">


                                                        @foreach($categories as $category)

                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                        @endforeach



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-2"> </div>

                                                <div class="col-sm-10">
                                                    <button class="btn btn-primary waves-effect waves-light " type="submit" >opslaan</button>
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



