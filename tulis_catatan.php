<head>
    <script src="http://localhost/peduli_diri/bootstrap.bundle.min5.1.3.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://localhost/peduli_diri/sweetalert.min.js"></script>
    <script src="js/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert/animate.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="http://localhost/peduli_diri/jquery.min3.6.1.js"></script>
    <script src="http://localhost/peduli_diri/bootstrap.min3.4.1.js"></script>
</head>
<?php

if (isset($_POST['tambah'])) {

    $nik = $_SESSION['nik'];
    $tanggal = $_POST['tgl'];
    $waktu = $_POST['waktu'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    include 'koneksi.php';
    if ($suhu > 38 || $suhu < 24) {
        echo "
            <script src='vendor/jquery/jquery.min.js'></script>
            <script src='js/sweetalert/dist/sweetalert2.all.min.js'></script>
            <script type='text/javascript'>
                setTimeout(function(){
                    Swal.fire({
                        title: 'Suhu tubuh anda tidak normal',
                        icon: 'warning',
                        showConfirmButton: true
                    });
                }, 10);
            </script>
        ";
    } else {
        $sql  = mysqli_query($koneksi, "INSERT INTO catatan (nik, tgl, waktu, lokasi, suhu) VALUES ('$nik', '$tanggal', '$waktu', '$lokasi', '$suhu')");


        echo "
            <script src='vendor/jquery/jquery.min.js'></script>
            <script src='js/sweetalert/dist/sweetalert2.all.min.js'></script>
                <script type='text/javascript'>
                    setTimeout(function(){
                        Swal.fire({
                            title: 'Berhasil Menambahkan Data',
                            icon: 'success',
                            showConfirmButton: true
                        });
                    });
            </script>
        ";
    }
}

include 'koneksi.php';
$nik      = $_SESSION['nik'];
$sql         = mysqli_query($koneksi, "SELECT * FROM catatan WHERE nik='$nik' ");
$query       = mysqli_fetch_all($sql, MYSQLI_ASSOC);

?>

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
        <!-- input data -->
        <form method="post" name="tambah">
            <div class="form-group">
                <label> Tanggal Perjalanan</label>
                <input name="tgl" class="form-control" type="date" placeholder="Pilih Tanggal" required>
            </div>
            <div class="form-group">
                <label> Waktu Perjalanan</label>
                <input name="waktu" class="form-control" type="time" placeholder="Pilih Waktu" required>
            </div>
            <div class="form-group">
                <label> Lokasi Perjalanan</label>
                <input name="lokasi" class="form-control" type="text" placeholder="Masukkan Lokasi Perjalanan" autocomplete="off" required>
            </div>
            <div class="form-group info">
                <label>Suhu Tubuh</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" class="suhu" name="suhu" id="suhu" maxlength="2" autocomplete="off" placeholder="Masukkan Suhu Tubuh" autocomplete="off" required>
                    <div class="input-group-append mb-3">
                        <span class="input-group-text">°C</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary" name="tambah">
                    <i class="fa fa-save">
                    </i>
                    SIMPAN
                </button>

                <button name="reset" type="reset" class="btn btn-sm btn-danger">
                    <i class="fa fa-trash">
                    </i>
                    Reset
                </button>

            </div>

        </form>

    </div>

</div>