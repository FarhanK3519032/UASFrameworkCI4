<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url("login/images/icons/favicon.ico"); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/vendor/animate/animate.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/vendor/css-hamburgers/hamburgers.min.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/vendor/animsition/css/animsition.min.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/vendor/select2/select2.min.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/vendor/daterangepicker/daterangepicker.css"); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/css/util.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("login/css/main.css"); ?>">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="/cek">
                    <?= csrf_field(); ?>

                    <div class="text-center p-b-50 mb-3">
                        <img src="<?= base_url("assets/img/Logo-login.png"); ?>" alt="logo">
                    </div>

                    <span class="login100-form-title p-b-30">
                        Login for Guest or Member
                        <?php if (session()->getFlashdata('pesan') != '') { ?>
                            <div class="alert alert-danger mt-4" role="alert" style="font-size: 1rem;">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php } ?>
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Username" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login as a Member
                        </button>
                    </div>

                    <div class="container-login100-form-btn mt-3">
                        <button class="login100-form-btn2">
                            Login as a Guest
                        </button>
                    </div>

                    <div class="text-center p-t-30 p-b-20">
                        <span class="txt2">
                            Don't have any account yet? <a href="/daftar" style="font-weight: 700; color:#00A2E9;">Sign Up Now</a>
                        </span>
                    </div>

                    <div class="text-right p-t-100">
                        <span>
                            <a href="/logadmin" class="txt33">Login for Admin<i class="fa-solid fa-arrow-right-long p-l-10" style="color: #00A2E9;"></i></a>
                        </span>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('<?= base_url("login/images/bg-03.jpg"); ?>');">
                </div>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/ccf1f9f071.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("vendor/jquery/jquery-3.2.1.min.js"); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("vendor/animsition/js/animsition.min.js"); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("vendor/bootstrap/js/popper.js"); ?>"></script>
    <script src="<?= base_url("vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("vendor/select2/select2.min.js"); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("vendor/daterangepicker/moment.min.js"); ?>"></script>
    <script src="<?= base_url("vendor/daterangepicker/daterangepicker.js"); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("vendor/countdowntime/countdowntime.js"); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url("js/main.js"); ?>"></script>

</body>

</html>