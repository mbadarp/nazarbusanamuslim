   <!-- ========== Left Sidebar Start ========== -->
   <div class="vertical-menu">


       <!-- LOGO -->
       <div class="navbar-brand-box">
           <a href="index.html" class="logo logo-dark">
               <span class="logo-sm">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
               </span>
           </a>

           <a href="index.html" class="logo logo-light">
               <span class="logo-sm">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26">
               </span>
               <span class="logo-lg">
                   <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vuesy</span>
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
                   <li class="menu-title" data-key="t-menu">Menu</li>
                   <li>
                       <a href="javascript: void(0);" class="has-arrow">
                           <i class="bx bx-home-circle nav-icon"></i>
                           <span class="menu-item" data-key="t-ecommerce">Home</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="#" data-key="t-products">Dashboard</a></li>
                       </ul>
                   </li>


                   <li class="menu-title" data-key="t-applications">Applications</li>

                   <li>
                       <a href="apps-calendar.html">
                           <i class="bx bx-calendar-alt nav-icon"></i>
                           <span class="menu-item" data-key="t-calendar">Calendar</span>
                       </a>
                   </li>

                   <li>
                       <a href="javascript: void(0);" class="has-arrow">
                           <i class="bx bx-shield-quarter nav-icon"></i>
                           <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="ecommerce-products.html" data-key="t-products">Products</a></li>
                           <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                       </ul>
                   </li>


               </ul>
           </div>
           <!-- Sidebar -->
       </div>
   </div>
   <!-- Left Sidebar End -->