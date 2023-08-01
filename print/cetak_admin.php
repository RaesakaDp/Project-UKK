<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Laporan PDF Dengan PHP dan MySQLi</title>
    <link rel="stylesheet" href="http://localhost/peduli_diri/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/peduli_diri/font-awesome.min.css">

</head>

<body>
    <div class="container">
        <center>
            <h1>CATATAN PERJALANAN</h1>
        </center>
        <br>
        <div class="float-right">
            <a href="Print_Admin.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
            <br>
            <br>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;">Id Catatan</th>
                    <th style="text-align: center;">NIK</th>
                    <th style="text-align: center;">Tanggal</th>
                    <th style="text-align: center;">Waktu</th>
                    <th style="text-align: center;">Lokasi</th>
                    <th style="text-align: center;">Suhu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT  * FROM catatan");
                while ($value = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $no++; ?></td>
                        <td style="text-align: center;"><?php echo $value['nik'] ?></td>
                        <td style="text-align: center;"><?php echo $value['tgl'] ?></td>
                        <td style="text-align: center;"><?php echo $value['waktu'] ?></td>
                        <td style="text-align: center;"><?php echo $value['lokasi'] ?></td>
                        <td style="text-align: center;"><?php echo $value['suhu'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>