  <!-- LOGO -->
  <a href="index.html" class="logo text-center logo-light">
      <span class="logo-lg">
          <img src="<?= base_url('assets/admin/') ?>images/logo.png" alt="" height="16">
      </span>
      <span class="logo-sm">
          <img src="<?= base_url('assets/admin/') ?>images/logo_sm.png" alt="" height="16">
      </span>
  </a>

  <!-- LOGO -->
  <a href="index.html" class="logo text-center logo-dark">
      <span class="logo-lg">
          <img src="<?= base_url('assets/admin/') ?>images/logo-dark.png" alt="" height="16">
      </span>
      <span class="logo-sm">
          <img src="<?= base_url('assets/admin/') ?>images/logo_sm_dark.png" alt="" height="16">
      </span>
  </a>

  <div class="h-100" id="leftside-menu-container" data-simplebar="">

      <!--- Sidemenu -->
      <ul class="side-nav">

          <li class="side-nav-title side-nav-item">Main Menu</li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                  <i class="uil-dashboard"></i>
                  <span> Dashboards </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarDashboards">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                      </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarMenuUtama" aria-expanded="false" aria-controls="sidebarMenuUtama" class="side-nav-link">
                  <i class="uil-home-alt"></i>
                  <span> Menu Utama </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarMenuUtama">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="#">Indentitas Website</a>
                      </li>
                      <li>
                          <a href="#">Banner Website</a>
                      </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                  <i class="uil-shop"></i>
                  <span> Modul Ecommerce </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEcommerce">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="#">Data Produk</a>
                      </li>
                      <li>
                          <a href="<?= base_url('admin/category') ?>">Kategori Produk</a>
                      </li>
                  </ul>
              </div>
          </li>

          <li class="side-nav-title side-nav-item">User Menu</li>

          <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarModulUser" aria-expanded="false" aria-controls="sidebarModulUser" class="side-nav-link">
                  <i class="uil-user-square"></i>
                  <span> Modul User </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarModulUser">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="#">Manajemen User</a>
                      </li>
                      <li>
                          <a href="#">Manajemen Modul</a>
                      </li>
                  </ul>
              </div>
          </li>



      </ul>

      <!-- End Sidebar -->

      <div class="clearfix"></div>

  </div>
  <!-- Sidebar -left -->

  </div>
  <!-- Left Sidebar End -->