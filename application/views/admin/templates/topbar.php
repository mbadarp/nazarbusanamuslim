<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vusey</span>
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url('assets/admin/') ?>images/logo-sm.svg" alt="" height="26"> <span class="logo-txt">Vusey</span>
                    </span>
                </a>

            </div>

            <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn noti-icon">
                <i class="fa fa-fw fa-bars font-size-16"></i>
            </button>


        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-block d-lg-none">
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">

                </div>
            </div>





            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url('assets/admin/images/users/') . $user['image'] ?>" alt="Header Avatar">
                    <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                        <span class="user-name"><?= $user['name'] ?><i class="mdi mdi-chevron-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <h6 class="dropdown-header"><?= $user['name'] ?></h6>
                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center" href="contacts-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                    <!-- <a class="dropdown-item" href="auth-lockscreen-cover.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a> -->
                    <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>


</header>