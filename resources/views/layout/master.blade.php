
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Dashboard</title>
  <!-- Favicon -->
  {{-- <link rel="shortcut icon" href="{{ asset('asset/dashboard/img/svg/Logo.svg') }}" type="image/x-icon"> --}}
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('asset/dashboard/css/style.min.css') }}">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  @include('layout.partials.sidebar')
  <div class="main-wrapper">
    <!-- ! Main nav -->
    @include('layout.partials.navbar')
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      @yield('content')
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">elegant-dashboard.com</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="{{ asset('dashboard/plugins/chart.min.js') }}"></script>
<!-- Icons library -->
<script src="{{ asset('asset/dashboard/plugins/feather.min.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('asset/dashboard/js/script.js') }}"></script>
</body>

</html>
