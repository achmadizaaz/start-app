<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
  <div data-simplebar class="h-100">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
              <li>
                  <a href="{{ route('dashboard') }}" class="waves-effect">
                      <i class="bi bi-houses"></i>
                      <span>DASHBOARD</span>
                  </a>
              </li>
              <li class="menu-title">User Management</li>
              <li {{ request()->routeIs('users.*') ? 'class=mm-active' : '' }}>
                <a href="#" class="has-arrow waves-effect">
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('users.index') }}" class="waves-effect">
                            <span>List Pengguna</span>
                        </a>
                    </li>                  
                <li>
                    <a href="{{ route('users.roles.index') }}" class="waves-effect">
                        <span>Roles</span>
                    </a>
                </li> 
                <li>
                    <a href="#" class="waves-effect">
                        <span>Hak Akses Role</span>
                    </a>
                </li>              
              </ul>
              </li>
              <li class="menu-title">DATA MASTER</li>
              <li>
                <a href="#" class="waves-effect">
                    <i class="bi bi-boxes"></i>
                    <span>Data Barang</span>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                    <i class="bi bi-boxes"></i>
                    <span>Jenis Barang</span>
                </a>
              </li>
              <li>
                <a href="#" class="waves-effect">
                    <i class="bi bi-boxes"></i>
                    <span>Satuan</span>
                </a>
              </li>
            <li class="menu-title">TRANSKSI</li>
            <li>
              <a href="#" class="waves-effect">
                  <i class="bi bi-boxes"></i>
                  <span>Barang Masuk</span>
              </a>
            </li>
            <li>
              <a href="#" class="waves-effect">
                  <i class="bi bi-boxes"></i>
                  <span>Barang Keluar</span>
              </a>
            </li>

            <li class="menu-title">Laporan</li>

            <li>
              <a href="#" class="waves-effect">
                  <i class="bi bi-boxes"></i>
                  <span>Laporan Transaksi</span>
              </a>
            </li>
            <li>
              <a href="#" class="waves-effect">
                  <i class="bi bi-boxes"></i>
                  <span>Laporan Pengguna</span>
              </a>
            </li>
            <li class="menu-title">Setting</li>
            <li>
              <a href="#" class="waves-effect">
                  <i class="bi bi-boxes"></i>
                  <span>Setting Aplikasi</span>
              </a>
            </li>
          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->