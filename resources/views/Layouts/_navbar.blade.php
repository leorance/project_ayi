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
          @if (Auth::user()->is_admin == 1)
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
          @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('reportPelayanan')}}">Lihat Jadwal</a>
          </li>
          @endif
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              @if (!Auth::user()->ref_id)
                <a class="dropdown-item" href="{{route('reportPelayanan')}}">
                  Report Pelayanan
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              @else
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
              @endif
            </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>