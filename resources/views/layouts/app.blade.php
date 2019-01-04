<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Pizza order systeem') }}</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Able Pro 7.0 Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset(('backend/bootstrap/css/bootstrap.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('backend/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/feather/css/feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/widget.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<!-- [ Pre-loader ] end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <!-- [ Header ] start -->
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">

                    <a href="{{ url('/admin') }}">
                        {{ config('app.name', 'Pizza order systeem') }}
                    </a>

                </div>
                <div class="navbar-container container-fluid">

                    <ul class="nav-right">


                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <span>Welkom <strong>{{ Auth::user()->firstname }}</strong> </span>

                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                                <i class="feather icon-log-out"></i>
                                                {{ __('Uitloggen') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" >
                                                @csrf
                                            </form>

                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Header ] end -->


        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <!-- [ navigation menu ] start -->
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">

                        <div class="pcoded-navigation-label">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">





                            @if(Auth::user()->role->name == 'administrator')

                            <li class="">
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                </a>
                            </li>



                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                    <span class="pcoded-mtext">Gebruikers</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li >
                                        <a href="{{ route('admin.user') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                            <span class="pcoded-mtext">Gebruikers Lijst</span>
                                        </a>

                                    </li>

                                    <li >
                                        <a href="{{ route('admin.user.create') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                            <span class="pcoded-mtext">Nieuwe gebruiker</span>
                                        </a>

                                    </li>

                                    <li >
                                        <a href="{{ route('admin.users.roles') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                            <span class="pcoded-mtext">Rollen</span>
                                        </a>

                                    </li>

                                    <li >
                                        <a href="{{ route('admin.users.role.create') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                            <span class="pcoded-mtext">Nieuwe rol</span>
                                        </a>

                                    </li>


                                </ul>

                            </li>

                            <li class="">
                                <a href="{{ route('admin.customers') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-user-x"></i></span>
                                    <span class="pcoded-mtext">Klanten</span>
                                </a>
                            </li>



                            <li class="">
                                <a href="{{ route('admin.products') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fas fa-utensils"></i></span>
                                    <span class="pcoded-mtext">Producten</span>
                                </a>
                            </li>

                            @endif

                            <li class="">
                                <a href="{{ route('admin.order.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                    <span class="pcoded-mtext">Bestellingen</span>
                                </a>
                            </li>



                        </ul>

                    </div>

                </nav>



                <!-- [ navigation menu ] end -->
                @yield('content')

            </div>
        </div>
    </div>
</div>

<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('backend/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
<!-- waves js -->
<script src="{{ asset('backend/waves/js/waves.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('backend/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- Float Chart js -->
<script src="{{ asset('backend/float/jquery.flot.js') }}"></script>
<script src="{{ asset('backend/float/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('backend/float/curvedLines.js') }}"></script>
<script src="{{ asset('backend/float/jquery.flot.tooltip.min.js') }}"></script>
<!-- amchart js -->
<script src="{{ asset('backend/amchart/amcharts.js') }}"></script>
<script src="{{ asset('backend/amchart/serial.js') }}"></script>
<script src="{{ asset('backend/amchart/light.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('backend/js/pcoded.min.js') }}"></script>
<script src="{{ asset('backend/js/vertical/vertical-layout.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/custom-dashboard.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/script.min.js') }}"></script>



<scrip>

    @if(Session::has('success'))

        toastr.success('{{ Session::get('success') }}')

    @endif


</scrip>



</body>

</html>
