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
        <a href="admin.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 5%;">NO</th>
                        <th style="width: 15%;">NIK</th>
                        <th style="width: 25%;">Nama Lengkap</th>
                        <th style="width: 10%;">Username</th>
                        <th style="width: 15%;">Jenis Kelamin</th>
                        <th style="width: 10%;">Password</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 8%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    include 'koneksi.php';
                    $sql = "SELECT * FROM user WHERE status = 1";
                    $query = mysqli_query($koneksi, $sql);
                    foreach ($query as $value) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nik'] ?></td>
                            <td><?= $value['nama_lengkap'] ?></td>
                            <td><?= $value['username'] ?></td>
                            <td><?= $value['jenkel'] ?></td>
                            <td><?= $value['pswd'] ?></td>
                            <td><?php if ($value['status']) {
                                    echo "Aktif";
                                } else {
                                    echo "Belum Aktif";
                                } ?>
                            </td>
                            <td>
                                <button type="button" name="sukses" data-toggle="modal" data-target="#myModal" data-swal-toast-template="#my-template" class="btn btn-danger btn-sm hapus-user alert_notif4" href="admin/hapus_user.php?nik=<?= $value['nik'] ?>">
                                    <i class="fas fa-trash"> Hapus User</i>
                                </button>
                                <!-- untuk konfirmasi hapus data  -->
                                <script>
                                    $('.alert_notif4').on('click', function() {
                                        var getLink = $(this).attr('href');
                                        Swal.fire({
                                            title: "Anda Ingin Menghapus User?",
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
                                                text: 'User Berhasil Dihapus',
                                                timer: 2000,
                                                showConfirmButton: false
                                            })
                                        </script>
                                        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
                                    <?php unset($_SESSION['sukses']);
                                    }
                                    ?>
                                </div>
                            </td>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Alert -->
<script src='vendor/jquery/jquery.min.js'></script>
<script src='js/sweetalert2.all.min.js'></script>
<script src="js/sweetalert/animate.min.css"></script>
<script src="js/sweetalert/sweetalert2.min.css"></script>
<script src="js/sweetalert/sweetalert2.min.js"></script>
<script src="http://localhost/peduli_diri/jquery.min.js"></script>
<script src="http://localhost/peduli_diri/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="http://localhost/peduli_diri/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<script src="http://localhost/peduli_diri/sweetalert2.all.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<!-- 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->