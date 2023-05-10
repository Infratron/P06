<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Nuovo Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('Homepage')}}">Home</a>
        </li>
        </li>
        <li class="nav-item">
          @auth
        <a class="nav-link" href="{{route('blog.create')}}">Iserisci Articolo</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('mercatino.create')}}">Iserisci Annuncio</a>
        </li>
        @endauth
        <li class="nav-item">
        <a class="nav-link" href="{{route('blog.index')}}">Lista degli articoli</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('mercatino.index')}}">Annunci Mercatino</a>
        </li>

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bentornato/a {{ Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Profilo</li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
          </ul>
        </li>
        @else  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visione Ospite
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('login')}}">Accedi</li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onlick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
          </ul>
        </li>
        @endauth


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Scrivi qui" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>