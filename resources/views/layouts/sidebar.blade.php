<div class="main-sidebar">
    <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Verifikasi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">VERIF</a>
          </div>
          <ul class="sidebar-menu">
            <!-- <li class="menu-header">Dashboard</li> -->
              <!-- <li class="nav-item dropdown {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
              </li> -->
            <li class="menu-header">Kelola Data</li>
              <!-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-folder-open"></i> <span>Kategori</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/kategori_gaji">Kategori Gaji</a></li>
                  </ul>
              </li> -->
              @if(Auth::check() && Auth::user()->level == 'admin')
              <li class="nav-item dropdown {{ Request::segment(1) === 'user' ? 'active' : '' }}">
                <a class="nav-link" href="/user"><i class="fas fa-users"></i> <span>Manajemen User</span></a>
              </li>
              @endif
              <li class="nav-item dropdown {{ Request::segment(1) === 'pegawai' ? 'active' : '' }}">
                <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> <span>Data Pegawai</span></a>
              </li>
              <!-- <li class=""><a class="nav-link" href="/kategori_universitas"><i class="fas fa-folder-open"></i> <span>Kategori</span></a></li> -->
              <!-- <li class=""><a class="nav-link" href="/tahun_masuk"><i class="fas fa-calendar"></i> <span></span></a></li> -->

            <!-- <li class="menu-header">Cetak Laporan</li>
              <li class="">
                <a class="nav-link" href="#"><i class="fas fa-print"></i> <span> Laporan Pegawai</span></a>
              </li> -->
          </ul>
    </aside>
</div>