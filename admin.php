<?php
session_start();
?>
<!-- proses terima user -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin | Peduli Diri</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/peduli_diri/css.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- link icon -->
    <link rel="stylesheet" href="http://localhost/peduli_diri/font-awesome-4.7.0">
    <link rel="stylesheet" href="http://localhost/peduli_diri/fontawesome-free-6.3.0-web">

    <!-- Alert -->
    <script src="js/sweetalert/animate.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Peduli Diri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-1">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="?url=approve">
                    <i class="bi bi-check2-all"></i>
                    <!-- ICON -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                    </svg>
                    <span>Persetujuan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?url=user">
                    <i class="fas fa-users"></i>
                    <span>Data Pengguna</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?url=catatan_perjalanan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Perjalanan</span></a>
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
                            <h2 style="font: size 900px;" style="font-family:courier;"> Admin - Catatan Perjalanan</h2>
                        </div>
                        <div class="col-xl-1"></div>
                        <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"> -->
                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?
                                echo $data['username'];
                                ?>
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
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="logout1();">
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
                                case 'user':
                                    include 'admin/user.php';
                                    break;

                                case 'catatan_perjalanan';
                                    include 'admin/catatan_perjalanan.php';
                                    break;

                                case 'approve';
                                    include 'admin/approve.php';
                                    break;

                                default:
                                    echo "Halaman Tidak Ditemukan";
                                    break;
                            }
                        } else {
                            echo "<h5>Selamat Datang Di Website 'Peduli Diri', Website Ini Digunakan Untuk Mencatat Riwayat Perjalanan Anda.</h5>";
                            echo "<p>Anda Login Sebagai :</p>";
                            echo "<h5><b>" . $_SESSION['username'] . "</b></h5>";
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
                        <!-- <span><a href="...">@Blog</a></span> -->
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

    <!-- Swal -->
    <script src="dist/sweetalert2.all.min.js"></script>
    <script>
        function logout1() {
            Swal.fire({
                title: 'Yakin Ingin Logout?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    setTimeout(function() {
                        Swal.fire({
                            title: 'Berhasil Logout',
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
    <!-- Login Dulu -->
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
    <?php } 
    ?>
    <!-- Proses User Acc -->
    <?php

if (isset($_POST["terima"])) {
    $nik = $_POST['nik'];

    include 'koneksi.php';
    $sql = "UPDATE user SET status=true WHERE nik='$nik'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) { ?>
        <script src='vendor/jquery/jquery.min.js'></script>
        <script src='js/sweetalert2.all.min.js'></script>
        <script type='text/javascript'>
            setTimeout(function() {
                Swal.fire({
                    title: 'Sukses',
                    text: 'Data Berhasil Disimpan',
                    icon: 'success',
                    showConfirmButton: false
                });
            });
            window.setTimeout(function() {
                window.location.replace('user.php%20?url=catatan_perjalanan');
            }, 1200);
        </script>
    <?php

    } else { ?>
        <script>
            alert("!!! Data catatan tidak teredit.");
            window.location.assign("user.php?url=catatan_perjalanan");
        </script>
<?php
    }
}
?>
</body>

</html>