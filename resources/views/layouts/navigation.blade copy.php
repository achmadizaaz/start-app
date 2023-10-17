<div class="container py-2">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      {{-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a> --}}

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-body-emphasis">Beranda</a></li>
        <li><a href="#" class="nav-link px-2 link-body-emphasis dropdown-toggle" data-bs-toggle="dropdown">Barang</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" class="dropdown-item">List Barang</a>
                </li>
                <li>
                    <a href="#" class="dropdown-item">Jenis Barang</a>
                </li>
                <li>
                    <a href="#" class="dropdown-item">Satuan</a>
                </li>
            </ul>
        </li>
        <li><a href="#" class="nav-link px-2 link-body-emphasis dropdown-toggle" data-bs-toggle="dropdown">Products</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" class="dropdown-item">Produk 1</a>
                </li>
                <li>
                    <a href="#" class="dropdown-item">Produk 2</a>
                </li>
            </ul>
        </li>
        
    </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="dropdown d-inline-block">
          <button class="btn btn-default dropdown-toggle header-item" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi-sun-fill" id="icon-mode"></i>
              <span id="text-mode">Light Mode</span>
          </button>
          <ul class="dropdown-menu">
              <li>
                  <button id="lightToggle" class="dropdown-item btn btn-default">
                      <i class="bi bi-sun-fill"></i> Light
                  </button>    
              </li>
            <li>
              <button id="darkToggle" class="dropdown-item btn btn-default">
                  <i class="bi bi-moon-stars-fill"></i> Dark
              </button>    
          </li>
          </ul>
      </div>

      <div class="dropdown text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" style="">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>