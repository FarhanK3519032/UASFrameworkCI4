<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('dash-ui/assets/images/favicon/favicon.ico'); ?>">

    <!-- Libs CSS -->

    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/libs/prismjs/themes/prism.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/libs/prismjs/plugins/toolbar/prism-toolbar.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/libs/bootstrap-icons/font/bootstrap-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/libs/dropzone/dist/dropzone.css'); ?>">
    <link href="<?= base_url('dash-ui/assets/libs/@mdi/font/css/materialdesignicons.min.css'); ?>" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
    <script src="https://kit.fontawesome.com/ccf1f9f071.js" crossorigin="anonymous"></script>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/css/theme.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dash-ui/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('datatables/datatables.min.css'); ?>">
    <title>Guest Dashboard</title>
</head>

<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <?= $this->include('layout/sidebar'); ?>
        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                <?= $this->include('layout/navbarGuest'); ?>
            </div>
            <!-- Container fluid -->
            <div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 fw-bold text-white">Akun anda terdeteksi sebagai Guest</h3>
                                    <p style="color: #fff;">Lakukan pengisian form dibawah untuk menjadi member dan dapat melakukan reservasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body text-left">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phonenumber" class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" id="phonenumber">
                                    </div>
                                    <div class="mb-3">
                                        <legend style="font-size: 1rem ; color: #000;">Jenis Kelamin :</legend>
                                        <div class="row" style="padding-left: 15px;">
                                            <div class="col-3 form-check">
                                                <input class="form-check-input" type="radio" name="laki" id="laki">
                                                <label class="form-check-label" for="laki">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="col-3 form-check">
                                                <input class="form-check-input" type="radio" name="laki" id="perempuan" checked>
                                                <label class="form-check-label" for="perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-end">
                                        <a href="" class="btn" style="background-color: #00A2E9; color: #fff;">Submit</a>
                                    </div>
                                    <div class="text-right d-flex justify-content-end mb-3">
                                        <span>
                                            <a href="/reservasi-2" class="txt33" style="text-decoration: none; color: #00A2E9;">Form for Civitas UNS<i class="fa-solid fa-arrow-right-long" style="color: #00A2E9; padding-left: 10px;"></i></a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="<?= base_url('dash-ui/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/feather-icons/dist/feather.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/prismjs/components/prism-core.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/prismjs/components/prism-markup.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/apexcharts/dist/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('dash-ui/assets/libs/dropzone/dist/min/dropzone.min.js'); ?>"></script>
    <!-- clipboard -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="<?= base_url('dash-ui/assets/js/theme.min.js'); ?>"></script>
</body>

</html>