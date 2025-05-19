<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Akreditasi | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        {{-- AdminLTE CSS (via CDN) --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
    
        <!-- Google Fonts Inter -->
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    
        <!-- Custom Font Style -->
        <style>
          body, 
          .navbar, 
          .navbar-nav .nav-link, 
          .navbar-brand, 
          .user-menu .nav-link, 
          .dropdown-menu {
            font-family: 'Inter', sans-serif;

          }
        </style>
        <style>
            .navbar-nav .nav-link.active,
            .navbar-nav .nav-link:focus,
            .navbar-nav .nav-link:hover {
            background-color: #191D6A;
            color: white !important;
            border-radius: 4px;
            font-weight: 600;
            padding: 0.375rem 0.75rem;
            }
        </style>
        
  
    </head>
    
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand-md navbar-light bg-white border-bottom">
        <div class="container-fluid d-flex align-items-center justify-content-between px-3">
          <!-- Logo kiri -->
          <a href="#" class="navbar-brand d-flex align-items-center" style="padding-left: 0;">

            <img src="{{ asset('logo/logopolinema.png') }}" alt="Logo Polinema" width="60" height="60" style="margin-right: 5px;">
            <img src="{{ asset('logo/logojti.png') }}" alt="Logo JTI" width="60" height="60">
            
          </a>
      
          <ul class="navbar-nav d-flex flex-row justify-content-center mx-auto" style="gap: 2rem;">
            <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            </li>
            <li class="nav-item">
                <p> || </p>
            </li>
            <li class="nav-item">
                <a href="{{ route('kriteria.detail') }}" class="nav-link {{ request()->routeIs('kriteria.detail') ? 'active' : '' }}">Kriteria</a>
            </li>
        </ul>
        
      

        <!-- Profil kanan -->
        <ul class="navbar-nav d-flex align-items-center" style="padding-right: 0;">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
                    <img src="{{ asset('adminlte/dist/img/avatar2.png') }}" class="user-image img-circle" alt="User Image" style="margin-right: 5px;">
                <span class="d-none d-md-inline">Nama User</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- Hapus bagian user-header ini -->
                <!-- <li class="user-header bg-primary">
                <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                <p>Nama User<br><small>Level User</small></p>
                </li> -->
                <li class="user-footer">
                <a href="#" class="btn btn-secondary btn-block" onclick="return false;">Profil</a>
                <a href="#" class="btn btn-danger btn-block" onclick="return false;">Logout</a>
                </li>
            </ul>
            </li>
        </ul>
  
        </div>
      </nav>
      


    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <h4 class="mt-4 mb-2">{{ $title ?? '' }}</h4>
            </div>
        </div>
        <div class="content">
            <div class="container">
                {{-- Main Content --}}
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="main-footer text-center">
        <strong>Copyright © {{ date('Y') }} | JTI - POLINEMA</strong>
    </footer>
</div>

{{-- AdminLTE JS (via CDN) --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

{{-- Additional Scripts --}}
@stack('scripts')
</body>
</html>
