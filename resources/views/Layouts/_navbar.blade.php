<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">GJPE Pelayanan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('kelas-a')}}">Kelas A</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Kelas B</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Kelas C</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              General Setting
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('users')}}">User</a></li>
              <li><a class="dropdown-item" href="{{url('talent')}}">Talent</a></li>
              <li><a class="dropdown-item" href="{{url('pelayanan')}}">Pelayanan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>