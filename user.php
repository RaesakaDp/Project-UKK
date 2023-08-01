<?php
session_start();
include 'koneksi.php';
?>
<?
$data12 = $_GET['username'];
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> User | Peduli Diri</title>
    <script src="http://localhost/peduli_diri/sweetalert2.all.min.js"></script>
    <link href="http://localhost/peduli_diri/sweetalert2.min.css" rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="http://localhost/peduli_diri/icon.css">
    <link rel="stylesheet" href="http://localhost/peduli_diri/fontawesome-free-6.3.0-web">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Peduli Diri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="?url=tulis_catatan">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Tulis Catatan Perjalanan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?url=catatan_perjalanan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Catatan Perjalanan</span></a>
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
                <form>
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <div class="col-md-10">
                            <h2 style="font: size 900px;" style="font-family:courier;">User - Catatan Perjalanan</h2>
                        </div>
                        <div class="col-xl-1"></div>
                        <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"> -->
                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-5 d-none d-lg-inline text-gray-400 small">
                                <div class="text-gray-400">
                                    <?
                                    echo $data12['username'];
                                    ?>
                                </div>
                            </span>
                            <!-- <img class="img-profile rounded-circle" src="img/pp.jpg" width="35px" height="35px"> -->
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="coba.php">
                                <i class="fas fa-exclamation fa-sm fa-fw mr-2 text-gray-400"></i>
                                Tentang Kami
                            </a> -->
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="#" onclick="logout();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Keluar
                            </a>
                        </div>
                </form>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="mb-4 text-gray-800">
                        <?php
                        $url = @$_GET['url'];
                        if (!empty($url)) {
                            switch ($url) {
                                case 'tulis_catatan';
                                    include 'tulis_catatan.php';
                                    break;

                                case 'catatan_perjalanan';
                                    include 'catatan_perjalanan.php';
                                    break;

                                case 'edit_catatan';
                                    include 'edit_catatan.php';
                                    break;

                                default;
                                    echo "Halaman Tidak Ditemukan";
                                    break;
                            }
                        } else {
                            echo "<h5>Selamat Datang Di Aplikasi Peduli Diri, Aplikasi Ini Digunakan Untuk Mencatat Riwayat Perjalanan Anda.<br></h5>";
                            echo "<p>Anda Login Sebagai:</p>";
                            echo "<h5> <b>" . $_SESSION['username'] . "</h5> </b>";
                        }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Peduli Diri 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" dibawah jika kamu ingin mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- function Logout -->
    <script>
        function logout() {
            Swal.fire({
                title: 'Yakin Ingin Keluar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    setTimeout(function() {
                        Swal.fire({
                            title: 'Berhasil Keluar',
                            icon: 'success',
                            showConfirmButton: false
                        });
                    });
                    window.setTimeout(function() {
                        window.location.replace('index.php');
                    }, 1000);
                }
            })
        }
    </script>
    <?php
    if (empty($_SESSION['nik'])) { ?>
        <script src='vendor/jquery/jquery.min.js'></script>
        <script src='js/sweetalert2.all.min.js'></script>
        <script type='text/javascript'>
            setTimeout(function() {
                Swal.fire({
                    title: 'Failed',
                    text: 'Login Gagal',
                    icon: 'error',
                    showConfirmButton: false
                });
            });
            window.setTimeout(function() {
                window.location.replace('index.php');
            }, 2000);
        </script>
    <?php } ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Sweet ALERT -->
    <script src="js/sweetalert/animate.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>




</body>

</html>