<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Landing Page Sederhana</title>
  
  @vite(['resources/sass/app.scss','resources/js/app.js'])
  <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
 
</head>
<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#"> <strong>RUMAH PISANG</strong></a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="/data-prodak">Prodak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="/tentang">About</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="#" class="login-button">Login</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  {{-- END Nabvar --}}
  @yield('konten')

</body>

</html>
