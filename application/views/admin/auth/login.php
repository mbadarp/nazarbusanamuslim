<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/admin/') ?>images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/admin/') ?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/admin/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/admin/') ?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="auth-bg-basic d-flex align-items-center min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 py-5 px-3">


                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-transparent shadow-none border-0">
                            <div class="card-body">
                                <div class="py-3">
                                    <div class="text-center">
                                        <h5 class="mb-0">Welcome Back !</h5>
                                        <p class="text-muted mt-2">Sign in to continue to Nazar.</p>
                                    </div>
                                    <form class="mt-4 pt-2">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="text" class="form-control" id="input-email" placeholder="Enter Email">
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i class='bx bxl-gmail'></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                            <input type="password" class="form-control" id="password-input" placeholder="Enter Password">
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="password-input">Password</label>
                                            <div class="form-floating-icon">
                                                <i class='bx bx-key'></i>
                                            </div>
                                        </div>

                                        <div class="form-check form-check-primary font-size-16 py-1">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <div class="float-end">
                                                <a href="auth-resetpassword-basic.html" class="text-muted text-decoration-underline font-size-14">Forgot your password?</a>
                                            </div>
                                            <label class="form-check-label font-size-14" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100" type="submit">Log In</button>
                                        </div>

                                        <div class="mt-4 pt-3 text-center">
                                            <p class="text-muted mb-0">Don't have an account ? <a href="auth-signup-basic.html" class="fw-semibold text-decoration-underline"> Signup Now </a> </p>
                                        </div>

                                    </form><!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Nazar.</p>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div>
        <!-- end container fluid -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/admin/') ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>libs/metismenujs/metismenujs.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>libs/feather-icons/feather.min.js"></script>

    <script src="<?= base_url('assets/admin/') ?>js/pages/pass-addon.init.js"></script>

</body>

</html>