<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><span>BOOSTER IMAN</span></a>
    </div>

    <div class="clearfix"></div>

    <div class="profile">
      <div class="profile_pic">
        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2>
          @if(Auth::user())
            {{ Auth::user()->nama }}
          @endif
        </h2>
      </div>
    </div>

    <br />

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>
          @if (session('level') == 1)
            Super Admin
          @elseif (session('level') == 2)
            Admin
          @elseif (session('level') == 3)
            User
          @endif
        </h3>
        <ul class="nav side-menu">
          <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
          </li>
          <li><a><i class="fa fa-volume-up"></i> Berita Dakwah <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Kelola Data Kategori Berita</a></li>
              <li><a href="#">Kelola Data Berita Dakwah</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-clock-o"></i> Jadwal Kajian <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Kelola Data Jadwal Kajian</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-users"></i> Management User <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('form') }}">Kelola Data User</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>

    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
  </div>
</div>
