<header class="app-header navbar">
      
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="FORUM DISKUSI ONLINE MAHASISWA">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="FORUM DISKUSI ONLINE MAHASISWA">
      </a>
      
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('kategori')}}">
                <i class="nav-icon icon-speedometer"></i> Kategori
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('kelola-postingan')}}">
                <i class="nav-icon icon-drop"></i>Kelola Postingan </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('kelola-komentar')}}">
                <i class="nav-icon icon-pencil"></i> Kelola Komentar</a>
            </li>
            
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="{{('profile')}}">
                <i class="nav-icon icon-puzzle"></i> Profile</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> Logout</a>
                </li>
            
              </ul>
            </li>
            
          </ul>
        </nav>
        </div>
</div>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
