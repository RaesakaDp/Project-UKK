<?php
if (!isset($_SESSION)) {
    session_start();
}

// $data = $_GET['id_user'];
?>

<head>
    <script src="http://localhost/peduli_diri/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://localhost/peduli_diri/sweetalert.min.js"></script>
    <script src="js/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert/animate.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="http://localhost/peduli_diri/jquery.min.js"></script>
    <script src="http://localhost/peduli_diri/bootstrap.min.js"></script>
</head>


<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Beranda</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 0%;">Nomor</th>
                        <th style="width: 15%;">Tanggal</th>
                        <th style="width: 5%;">Waktu</th>
                        <th style="width: 20%;">Lokasi</th>
                        <th style="width: 5%;">Suhu</th>
                        <th style="width: 17%;">Action</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    include 'koneksi.php';
                    $sql = "SELECT*FROM catatan WHERE nik='$_SESSION[nik]'";
                    $query = mysqli_query($koneksi, $sql);
                    foreach ($query as $values) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $values['tgl'] ?></td>
                            <td><?= $values['waktu'] ?></td>
                            <td><?= $values['lokasi'] ?></td>
                            <td><?= $values['suhu'] ?></td>

                            <!-- BTN HAPUS -->
                            <td>
                                <button href="hapus_catatan.php?id_catatan=<?= $values['id_catatan']; ?>" type="button" name="sukses" class="btn btn-sm btn-danger alert_notif" data-toggle="modal" data-target="#myModal" data-swal-toast-template="#my-template">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>

                                <!-- untuk konfirmasi hapus data  -->
                                <script>
                                    $('.alert_notif').on('click', function() {
                                        var getLink = $(this).attr('href');
                                        Swal.fire({
                                            title: "Anda Ingin Menghapus Data?",
                                            icon: 'question',
                                            showCancelButton: true,
                                            confirmButtonColor: '#d33',
                                            confirmButtonText: 'Ya',
                                            cancelButtonColor: '#3085d6',
                                            cancelButtonText: "Batal"

                                        }).then(result1 => {
                                            //arah proses
                                            if (result1.isConfirmed) {
                                                window.location.href = getLink;
                                                name = "sukses"
                                            }
                                        })
                                        return false;
                                    });
                                </script>
                                <!-- W3School -->
                                <div id="myModal" class="modal fade" role="dialog" id="hapus 
                                                    <?php
                                                    echo $data['id_user']
                                                    ?>
                                                ">
                                    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
                                                di dalam session sukses  -->
                                    <?php if (@$_SESSION['sukses']) {
                                    ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses',
                                                text: 'data berhasil dihapus',
                                                timer: 2000,
                                                showConfirmButton: false
                                            })
                                        </script>
                                        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
                                    <?php unset($_SESSION['sukses']);
                                    }
                                    ?>
                                </div>

                                <!-- BTN EDIT -->
                                <button href="?url=edit_catatan&id_catatan=<?= $values['id_catatan']; ?>" type="button" name="berhasil" class="btn btn-sm btn-info alert_notif1" data-toggle="modal" data-target="#myModal" data-swal-toast-template="#my-template">
                                    <i class="far fa-edit"></i> Edit
                                </button>
                                <div id="myModal" class="modal fade" role="dialog" id="edit 
                                                    <?php
                                                    echo $data['id_user']
                                                    ?>
                                                ">
                                    <?php
                                    if (@$_SESSION['berhasil']) {
                                    ?>
                                        <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses',
                                                text: 'Data Berhasil Diedit',
                                                timer: 2000,
                                                showConfirmButton: false
                                            })
                                        </script>
                                        <!-- unset refresh -->
                                    <?php unset($_SESSION['berhasil']);
                                    }
                                    ?>
                                    <!-- untuk konfirmasi edit data  -->
                                    <script>
                                        $('.alert_notif1').on('click', function() {
                                            var getLink = $(this).attr('href');
                                            Swal.fire({
                                                title: "Anda Ingin Mengedit Data?",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#d33',
                                                confirmButtonText: 'Ya',
                                                cancelButtonColor: '#3085d6',
                                                cancelButtonText: "Batal"

                                            }).then(result => {
                                                //arah proses
                                                if (result.isConfirmed) {
                                                    window.location.href = getLink
                                                }
                                            })
                                            return false;
                                        });
                                    </script>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body float-right">
        <a href="print/cetak_user.php" class="btn btn-info btn-icon-split">
            <span class="icon text-white-100">
                <i class="fa-solid gg-printer"></i>
            </span>
            <span class="text">Cetak</span>
        </a>
    </div>
</div>


<!-- Icon -->
<link href='http://localhost/peduli_diri/printer.css' rel='stylesheet'>
<!-- Alert -->
<script src="js/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="js/sweetalert/animate.min.css"></script>
<script src="js/sweetalert/sweetalert2.min.css"></script>
<script src="js/sweetalert/sweetalert2.min.js"></script>
<script src="http://localhost/peduli_diri/jquery.min.js"></script>
<script src="http://localhost/peduli_diri/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="http://localhost/peduli_diri/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="http://localhost/peduli_diri/sweetalert2.all.min.js"></script>
<!-- http://localhost/peduli_diri -->