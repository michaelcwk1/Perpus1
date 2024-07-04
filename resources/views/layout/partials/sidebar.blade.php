<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
      <span class="ms-auto font-weight-bold">Admin Dashboard</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <button class="col-10 nav-link" onclick="subMenuBlog()">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Blog</span>
          <i class="ni ni-bold-down ms-auto"></i>
        </button>
          <div id="subMenuBlog" class="ms-5 d-none">
              <a class="nav-link " href="{{ route('data-article') }}">
                <span class="nav-link-text ms-1">Data Artikel</span>
              </a>
              <a class="nav-link " href="{{ route('create-article') }}">
                <span class="nav-link-text ms-1">Buat Artikel</span>
              </a>
              <a class="nav-link " href="{{ route('create-category') }}">
                <span class="nav-link-text ms-1">Buat Kategori</span>
              </a>
              <a class="nav-link " href="{{ route('comment-article') }}">
                <span class="nav-link-text ms-1"> Komentar</span>
              </a>
          </div>
      </li>
      <li class="nav-item">
        <button class="col-10 nav-link" onclick="subMenuBooks()">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-books text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Buku</span>
          <i class="ni ni-bold-down ms-auto"></i>
        </button>
        <div id="subMenuBooks" class="ms-5 d-none">
              <a class="nav-link " href="{{ route('data-books') }}">
                <span class="nav-link-text ms-1">Data Buku</span>
              </a>
              <a class="nav-link " href="{{ route('create-books') }}">
                <span class="nav-link-text ms-1">Buat Buku</span>
              </a>
          </div>
      </li>
      <li class="nav-item">
        <button class="col-10 nav-link" onclick="subMenuUser()">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-user-run text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">User</span>
          <i class="ni ni-bold-down ms-auto"></i>
        </button>
        <div id="subMenuUser" class="ms-5 d-none">
              <a class="nav-link " href="{{ route('index-users') }}">
                <span class="nav-link-text ms-1">Data User</span>
              </a>
          </div>
      </li>
    </ul>
</aside>
