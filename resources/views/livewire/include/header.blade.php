<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{-- =============================== new link====================================== --}}
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/adminlte.min.css') }}">
</head>


<script src="https://kit.fontawesome.com/eb54a27021.js" crossorigin="anonymous"></script>
<style>
    .error {
        color: red;
        font-size: 13px;
    }

    .cmw {
        max-width: 900px;

    }

    body {
        font-family: "Barlow", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .button-like-link {
        background: none;
        border: none;
        padding: 0;
        font: inherit;
        color: rgb(0, 0, 0);
        /* or any other link color */
        text-decoration: none;
        cursor: pointer;
    }

    .dropdown {
        width: 150px;
    }

    .dropdown:hover .dropdown-list {
        opacity: 1;
        visibility: visible;
    }

    .dropdown-select {
        border-radius: 4px;
        background-color: white;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 1.1rem;
        cursor: pointer;
    }

    .dropdown-list {
        border-radius: 4px;
        background-color: white;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.2s linear, visibility 0.2s linear;
        transform: translateY(10px);
    }

    .dropdown-list:before {
        content: "";
        width: 100%;
        height: 10px;
        background-color: transparent;
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-100%);
    }

    .dropdown-list__item {
        padding: 1rem;
        font-size: 1.4rem;
    }

    .radio-inputs {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        border-radius: 0.5rem;
        background-color: #EEE;
        box-sizing: border-box;
        box-shadow: 0 0 0px 1px rgba(0, 0, 0, 0.06);
        padding: 0.25rem;
        width: 270px;
        font-size: 14px;
        margin-top: 25px
    }

    .radio-inputs .radio {
        flex: 1 1 auto;
        text-align: center;
    }

    .radio-inputs .radio input {
        display: none;
    }

    .radio-inputs label {
        margin-bottom: 0px;
    }

    .radio-inputs .radio .name {
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        border: none;
        padding: .4rem 0;
        /* margin-top: 20px */
        color: rgba(51, 65, 85, 1);
        transition: all .15s ease-in-out;
    }

    .radio-inputs .radio input:checked+.name {
        background-color: #fff;
        font-weight: 600;
    }
</style>

</head>

<body class=" layout-fixed layout-navbar-fixed ">

    <div class="wrapper">

        <!-- Preloader -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #b8b7b7;">
                        {{ $role }} |
                        <i class="fa-solid fa-caret-down" style="color: #b8b7b7;"></i>
                    </a>
                    @if ($user = Auth::guard('admin')->user())
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                            <div class="dropdown-divider"></div>


                            <a href="/admin/profile/{{ $user->id }}" class="dropdown-item">

                                <i class="fa-solid fa-user mr-2" style="color: black;"></i>
                                Profile
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            {{-- if user go to rote profile if admin go to route admin.profile --}}
                            <form method="POST" action="{{ route('admin.logout') }}"
                                class="dropdown-item dropdown-footer">
                                @csrf
                                <i class="fa-solid fa-right-from-bracket" style="color: #000000;"></i>
                                <button class="button-like-link">logout</button>
                            </form>

                        </div>
                    @else
                        @php
                            $user = Auth::guard('web')->user();
                        @endphp
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                            <div class="dropdown-divider"></div>

                            <a href="/profile/{{ $user->id }}" class="dropdown-item">

                                <i class="fa-solid fa-user mr-2" style="color: black;"></i>
                                Profile
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            {{-- if user go to rote profile if admin go to route admin.profile --}}
                            <form method="POST" action="{{ route('logout') }}" class="dropdown-item dropdown-footer">
                                @csrf
                                <i class="fa-solid fa-right-from-bracket" style="color: #000000;"></i>
                                <button class="button-like-link">logout</button>
                            </form>

                        </div>
                    @endif

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fa-solid fa-expand" style="color: #000000;"></i> </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->
