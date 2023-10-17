<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- cdns --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- custom css --}}
    @vite(['resources/scss/admin.scss', 'resources/js/app.js'])

    <title>@yield("title", "Ecommerce")</title>
  </head>
  <body>
    <div class="admin">
        <div class="sidebar">
            <a href="{{ url("/") }}" class="sidebar-brand">Ecommerce</a>
            <div class="sidebar-menu">
                <a href="{{ url("/") }}" class="sidebar-menu-link">Dashboard</a>
                <a href="{{ url("/admin/categories") }}" class="sidebar-menu-link">Kategoriler</a>
                <a href="{{ url("/admin/books") }}" class="sidebar-menu-link">Kitaplar</a>
                <a href="{{ url("/admin/publishers") }}" class="sidebar-menu-link">Publishers</a>
                <a href="{{ url("/admin/writers") }}" class="sidebar-menu-link">Yazarlar</a>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img width="35" class="me-1" src="https://www.seekpng.com/png/detail/377-3776081_facecircle-user-picture-in-circle-png.png" alt=""> {{ Auth::user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a></li>
                            <li>
                                <a class="dropdown-item bg-danger text-white" href="{{ url('/cikis-yap') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Çıkış Yap
                                </a>
                                <form id="logout-form" action="{{ url('/cikis-yap') }}" method="POST" class="d-none"> @csrf </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="main px-3 py-4">
                <div class="card">
                    <div class="card-body">
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- dom content loaded scripts --}}
    <script>
      $(document).ready(function(){
        @include("includes.toastr")
      })
    </script>

  </body>
</html>