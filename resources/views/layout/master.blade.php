
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    {{ $title }}
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/dashboard/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <x-head.tinymce-config/>
  <link href="{{ asset('assets/dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/dashboard/css/argon-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('layout.partials.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('layout.partials.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @yield('content')
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                &copy; <script>
                  document.write(new Date().getFullYear())
                </script>,
                Admin dashboard by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              </div>
            </div>
            <div class="col-lg-6 ">
                <div class="copyright text-center text-sm text-muted text-lg-end">
                &copy; <script>
                  document.write(new Date().getFullYear())
                </script>,
                Built by Uneso Progam
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/dashboard/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/dashboard/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/dashboard/js/argon-dashboard.min.js') }}"></script>
  <script>
        function subMenuBlog() {
            const showMenuBlog  = document.getElementById("subMenuBlog");
            showMenuBlog.classList.remove("d-none");
        }

        function subMenuBooks() {
            const subMenuBooks  = document.getElementById("subMenuBooks");
            subMenuBooks.classList.remove("d-none");
        }

        function subMenuUser() {
            const subMenuBooks  = document.getElementById("subMenuUser");
            subMenuBooks.classList.remove("d-none");
        }
    </script>
</body>

</html>
