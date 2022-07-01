<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="dash-ui/assets/images/favicon/favicon.ico">

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
                                    <h3 class="mb-0 fw-bold text-white">Selamat Datang di Halaman Dashboard</h3>
                                    <p style="color: #fff;">Berikut merupakan pilihan laboratorium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt-4 d-flex align-items-stretch">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body text-center">
                                <!-- heading -->
                                <div class="text-center mb-3">
                                    <div>
                                        <h4 class="mb-1"><b>Software Engineering</b></h4>
                                        <h4 style="border: 1px solid #00A2E9;"></h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <img src="<?= base_url('assets/img/Lab-1.png'); ?>" alt="" class="mb-3">
                                    <p class="mt-0">Laboratorium software engineering merupakan lab komputer yang dikhususkan untuk kegiatan rekayasa perangkat lunak (RPL).</p>
                                    <a href="/labsoftware" class="btn p-t-4" style="background-color:#00A2E9; color: #fff;">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt-4 d-flex align-items-stretch">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body text-center">
                                <!-- heading -->
                                <div class="text-center mb-3">
                                    <div>
                                        <h4 class="mb-1"><b>Multimedia Studio</b></h4>
                                        <h4 style="border: 1px solid #00A2E9;"></h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <img src="<?= base_url('assets/img/Lab-2.png'); ?>" alt="" class="mb-3">
                                    <p class="mt-0">Multimedia Studio merupakan studio yang dikhususkan untuk kegiatan yang berhubungan dengan multimedia (shooting, editing, designing, dll).</p>
                                    <a href="/labmulmed" class="btn p-t-4" style="background-color:#00A2E9; color: #fff;">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt-4 d-flex align-items-stretch">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body text-center">
                                <!-- heading -->
                                <div class="text-center mb-3">
                                    <div>
                                        <h4 class="mb-1"><b>Networking and Instrumen</b></h4>
                                        <h4 style="border: 1px solid #00A2E9;"></h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <img src="<?= base_url('assets/img/Lab-3.png'); ?>" alt="" class="mb-3">
                                    <p class="mt-0">Laboratorium Networking dan Instrumentation merupakan lab yang dikhususkan untuk kegiatan yang berhubungan dengan perangkat jaringan.</p>
                                </div>
                                <a href="/labnetwork" class="btn" style="background-color:#00A2E9; color: #fff;">More Details</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- row  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white border-bottom-0 py-4">
                                <h4 class="mb-0">Schedule Laboratorium Saat Ini</h4>
                            </div>

                            <!-- table -->
                            <table class="table" id="datatabel">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">No</th>
                                        <th scope="col">Laboratorium</th>
                                        <th scope="col">Mulai Pemakaian</th>
                                        <th scope="col">Selesai Pemakaian</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <!-- end table -->
                            <!-- card footer  -->
                            <div class="card-footer bg-white text-center">
                                <a href="#">View All Projects</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- row  -->
                <div class="row my-6">
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
        <script type="text/javascript" src="<?= base_url("datatables/datatables.min.js"); ?>"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                let baseUrl = "<?= base_url(''); ?>";
                let urlPathAva = baseUrl + '/img/';
                var scheduleTable = $('#datatabel').DataTable({
                    "defRender": true,
                    "language": {
                        "search": "_INPUT_",
                        "searchPlaceholder": "Cari di sini...",
                        "emptyTable": "Data kategori masih kosong",
                        "zeroRecords": "Data kategori kosong"
                    },
                    "dom": '<"wrapper m-2 bg-label-secondary p-1"lf>rt<"wrapper rounded-3 bg-label-dark"<i><"row align-items-center"<""><p>>>',
                    "processing": true,
                    "serverSide": true,
                    "order": [
                        [1, "desc"]
                    ],
                    "aLengthMenu": [
                        [5, 15, 30],
                        [5, 15, 30]
                    ],
                    "columns": [{
                            "data": "No",
                            'className': 'text-center',
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            'data': 'laboratorium',
                            'className': "text-left",
                            'orderable': true,
                        },
                        {
                            'data': 'mulai_pemakaian',
                            'className': "text-left",
                            'orderable': true,
                        },
                        {
                            'data': 'selesai_pemakaian',
                            'className': "text-left",
                            'orderable': true,
                        },
                        {
                            'data': 'status',
                            'className': "text-left",
                            'orderable': false,
                            render: function(data, type, row, meta) {
                                var warnaStatus = (data == 'complete') ? 'success' : (data == 'cancel') ? 'danger' : 'warning';
                                return `<span class="badge bg-${warnaStatus}">${data}</span>`;
                            }
                        },
                    ],
                    "ajax": {
                        "url": "<?php echo site_url('admin/getdata') ?>",
                        "type": "POST",
                        'data': function(data) {
                            console.log(data);
                        }
                    }
                });
                scheduleTable.on('draw', function() {
                    var total_records = scheduleTable.rows().count();
                    var page_length = scheduleTable.page.info().length;
                    var total_pages = Math.ceil(total_records / page_length);
                    var current_page = scheduleTable.page.info().page + 1;
                });

                function resetForm() {
                    $('#form-add').each(function() {
                        $(this).find('.invalid-feedback').remove();
                        $(this).find('.form-control').removeClass('is-invalid');
                    });
                }

                function edit(id) {
                    $.ajax({
                        url: "<?= base_url('/user/form') ?>/" + id,
                        dataType: "json",
                        success: function(response) {
                            $('#viewmodal').html(response.data).show();
                            $('#editmodal').modal('show');
                        }
                    });
                }

                $('#form-add').submit(function(e) {
                    e.preventDefault();
                    let formData = new FormData(this);
                    resetForm();
                    $.ajax({
                        type: $(this).attr('method'),
                        url: $(this).attr('action'),
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            var resp = JSON.parse(response);
                            var data = resp.data;
                            if (parseInt(resp.status) == 200) {
                                // $('#modalAnggota').modal('hide');
                                // anggotaTable.draw();
                                // alert("Berhasil menambahkan data");
                                // resetForm();
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: response.sukses,
                                    icon: 'success',
                                    confirmButtonText: 'Ok'
                                })
                                $('#schedulemodal').modal('hide');
                                tampilData();
                            } else {
                                for (const val in data) {
                                    const inputTag = 'form#form-add' + ' #' + val;
                                    $(inputTag).addClass('is-invalid');
                                    if (!$(inputTag).parent().find('.invalid-feedback').length) {
                                        $(inputTag).parent().append(`<div class="invalid-feedback">
                                    ${data[val]}
                                    </div>`);
                                    }
                                }
                            }
                        },
                        error: function() {
                            alert("Gagal menambahkan data");
                        }
                    });
                });
            });
        </script>

</body>

</html>