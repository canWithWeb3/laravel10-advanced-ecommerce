<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">Ecommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        {{-- link start --}}
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategoriler
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </li>
        </ul>
        {{-- link finish --}}

        {{-- auth start --}}
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @admin
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/admin") }}">Admin</a>
              </li>
            @endadmin
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @auth
                  {{ Auth::user()->username }}
                @else
                  <i class="fas fa-user"></i>
                @endauth
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @auth
                  <li><a class="dropdown-item" href="{{ url("/profilim") }}">Profilim</a></li>
                  <li>
                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="/cikis-yap">Çıkış Yap</a>
                    <form action="{{ url("/cikis-yap") }}" id="logout-form" method="POST" class="d-none"> @csrf </form>
                  </li>
                @else
                  <li><a class="dropdown-item" href="{{ url("/giris-yap") }}">Giriş Yap</a></li>
                  <li><a class="dropdown-item" href="{{ url("/kayit-ol") }}">Kayıt Ol</a></li>
                @endif
              </ul>
            </li>
        </ul>
        {{-- auth finish --}}

        {{-- form start --}}
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        {{-- form finish --}}
      </div>
    </div>
  </nav>