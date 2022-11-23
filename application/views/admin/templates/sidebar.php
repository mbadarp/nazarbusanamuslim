   <!-- ========== Left Sidebar Start ========== -->
   <div class="vertical-menu">


       <!-- LOGO -->
       <div class="navbar-brand-box">
           <a href="index.html" class="logo logo-dark">
               <span class="logo-sm">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Nazar Jember</span>
               </span>
           </a>

           <a href="index.html" class="logo logo-light">
               <span class="logo-sm">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Nazar Jember</span>
               </span>
           </a>
       </div>

       <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
           <i class="fa fa-fw fa-bars"></i>
       </button>

       <div data-simplebar class="sidebar-menu-scroll">

           <!--- Sidemenu -->
           <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                   <li class="menu-title" data-key="t-menu">Main Menu</li>
                   <li>
                       <a href="javascript: void(0);" class="has-arrow">
                           <i class="bx bx-home-circle nav-icon"></i>
                           <span class="menu-item" data-key="t-ecommerce">Home</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="<?= base_url('admin/dashboard') ?>" data-key="t-dashboard">Dashboard</a></li>
                       </ul>
                   </li>


                   <li>
                       <a href="javascript: void(0);" class="has-arrow">
                           <i class='bx bx-store-alt nav-icon'></i>
                           <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="<?= base_url('admin/product') ?>" data-key="t-products">Data Produk</a></li>
                           <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                       </ul>
                   </li>

                   <li>
                       <a href="javascript: void(0);" class="has-arrow">
                           <i class='bx bx-store-alt nav-icon'></i>
                           <span class="menu-item" data-key="t-setting">Setting</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="<?= base_url('admin/product') ?>" data-key="t-products">Data Produk</a></li>
                           <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                       </ul>
                   </li>


               </ul>
           </div>
           <!-- Sidebar -->
       </div>
   </div>
   <!-- Left Sidebar End -->