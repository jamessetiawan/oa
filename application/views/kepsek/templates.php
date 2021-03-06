<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('index.php/Kepsek') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-broadcast-tower"></i>
                </div>
                <div class="sidebar-brand-text"><span style="font-size:8pt">Online Administration</span></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('index.php/Kepsek') ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Kepsek/employee'); ?>">
                    <i class="fas fa-user-tie"></i>
                    <span>Employee</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Kepsek/students'); ?>">
                    <i class="fas fa-user-graduate"></i>
                    <span>Students</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Kepsek/board'); ?>">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Board Teacher</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Kepsek/users'); ?>">
                    <i class="fas fa-users-cog"></i>
                    <span>Users</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="d-sm-flex align-items-center justify-content-between ml-2">
                        <h1 class="h5 mb-0 text-gray-800">Administrasi Online SMKN 1 Cijati</h1>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                                <span class="mr-2 d-none d-lg-inline text-gray-600 small text-uppercase">
                                    <?= $this->session->userdata('username') ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('asset/img/undraw_profile.svg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item text-uppercase" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <?= $this->session->userdata('username') ?> / <?= $this->session->userdata('position') ?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" id="page-content" style="max-height:500px;">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <small style="font-size:10pt">Sistem Informasi Monitoring Kelengkapan Administrasi Guru Tahun Ajaran : <?php echo $this->session->userdata('school_year_nama'); ?></small>
                        <br>
                        <span class="badge badge-pill badge-primary"><?php echo $title; ?></span>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button onclick="window.history.back();" class="float-right mb-1 btn btn-sm btn-link" style="text-decoration:none"><i class="fas fa-caret-square-left"></i> Kembali</button>
                        </div>
                        <div class="col-12">
                            <?php $this->load->view($content); ?>

                        </div>
                    </div>

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin ingin mengakhiri session ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('Guru/Logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/swal/swal.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/js/sb-admin-2.js') ?>"></script>

    <script>
        <?php if (!empty($this->session->flashdata('status'))) : ?>
            Swal.fire({
                icon: '<?= $this->session->flashdata('status') ?>',
                title: '<?= $this->session->flashdata('message') ?>',
                text: '<?= $this->session->flashdata('text') ?>',
                confirmButtonColor: '#486dda',

            });
        <?php endif; ?>
        <?php if (!empty($_GET['error']) && $_GET['error'] == "file") : ?>
            Swal.fire({
                title: 'Upload gagal',
                html: "file yang diupload hanya ekstensi <br>(.doc .xls .docx .xlsx .zip .rar)",
                icon: 'error',
                confirmButtonColor: '#4469d7',
            });
        <?php endif; ?>
        $(document).ready(function() {
            <?php if (empty($this->input->get('tab'))) : ?>
                $('#myTab a[href="#tab1"]').tab('show');
            <?php else : ?>
                $('#myTab a[href="#<?= $this->input->get('tab') ?>"]').tab('show');
            <?php endif; ?>

            $('.btn-add').click(function() {
                let url = $('#url-save').val();
                $('#form-set').attr('action', url);
                $("#form-set").trigger('reset'); //jquery
            });

            $('#data_guru').change(function() {
                let check = $(this).val();
                if (check != "") {
                    let data = $('#data_guru option:selected').html();
                    let databaru = data.split('/');
                    let nik = databaru[0];
                    let username = databaru[1];

                    $('#nik').val(nik);
                    $('#username').val(username);
                }
            });

            $('.add-detail').click(function() {
                let id = $(this).data('id');
                $('#subject_teacher_id').val(id);
            });


        });
    </script>
</body>

</html>