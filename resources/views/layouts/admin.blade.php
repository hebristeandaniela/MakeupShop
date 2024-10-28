<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard - {{ config('app.name', 'Makeup Shop - Magazin de machiaje') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Additional Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Additional Scripts -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
   
    <!-- Script.js -->
    <script>
        var _base_url_ = '{{ url('/') }}';
    </script>
     <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
    <style>
        .user-img {
            position: absolute;
            height: 27px;
            width: 27px;
            object-fit: cover;
            left: -24%;
            top: -12%;
        }

        .btn-rounded {
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div id="app" class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-orange">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Acasa</a>
                    </li>
                    
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon"
                        data-toggle="dropdown">
                        <span><img src="{{ asset('assets/images/avatar.jpg') }}" class="img-circle elevation-2 user-img"
                                alt="User Image"></span>
                        <span class="ml-3">{{ Auth::user()->name }}</span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                            <i class="fa fa-user"></i> Contul meu
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Deconectare
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        @include('admin.navigation')
        
        
       
          
                <div class="content-wrapper mb-0 mt-3">
                    <section class="content">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </section>
                </div>
        
                @include('admin.footer')
           
            <!-- AdminLTE App -->
            <script src="{{ asset('assets/js/adminlte.js') }}"></script>
        

   
</body>
<script>
    
        $(document).ready(function () {
            var page = '{{ Request::segment(2) }}';
            if ($('.nav-link.nav-' + page).length > 0) {
                $('.nav-link.nav-' + page).addClass('active');
                if ($('.nav-link.nav-' + page).hasClass('tree-item') === true) {
                    $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active');
                    $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open');
                }
                if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') === true) {
                    $('.nav-link.nav-' + page).parent().addClass('menu-open');
                }
            }
            $('.nav-link.active').addClass('bg-gradient-orange');
        });

</script>
</html>