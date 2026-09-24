<!DOCTYPE html>
<html lang="id">
<head>
  <title>Admin Dashboard - Sistem Informasi Sekolah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
  
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
  
  <!-- Template CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
  <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

 
  <style>
    body {
        overflow-x: hidden !important;
    }
    .pc-sidebar {
        position: fixed !important;
        top: 0;
        bottom: 0;
        left: 0;
        width: 260px !important;
        z-index: 1025;
        background: #fff;
    }
    .pc-container {
        margin-left: 260px !important;
        width: calc(100% - 260px) !important;
        max-width: calc(100% - 260px) !important;
        padding: 25px !important;
        box-sizing: border-box !important;
    }
    .pc-content {
        padding: 0 !important;
        margin: 0 !important;
        width: 100% !important;
    }
  </style>
</head>

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

  <!-- Pre-loader -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <!-- Sidebar -->
  @include('admin.layouts.sidebar')

  <!-- Header -->
  @include('admin.layouts.header')

  <!-- Main Content -->
  <div class="pc-container">
    <div class="pc-content">
      @yield('content')
    </div>
  </div>

  <!-- Footer -->
  @include('admin.layouts.footer')

  <!-- Required JS -->
  <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('assets/js/pcoded.js') }}"></script>

  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>
</body>
</html>