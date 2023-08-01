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
                        <th style="width: 18%;">NIK</th>
                        <th style="width: 20%;">Tanggal</th>
                        <th style="width: 10%;">Waktu</th>
                        <th style="width: 10%;">Lokasi</th>
                        <th style="width: 5%;">Suhu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    include 'koneksi.php';
                    $sql = "SELECT * FROM catatan";
                    $query = mysqli_query($koneksi, $sql);
                    foreach ($query as $value) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nik'] ?></td>
                            <td><?= $value['tgl'] ?></td>
                            <td><?= $value['waktu'] ?></td>
                            <td><?= $value['lokasi'] ?></td>
                            <td><?= $value['suhu'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body float-right">
        <a href="print/cetak_admin.php" class="btn btn-info btn-icon-split">
            <span class="icon text-white-100">
                <i class="fa-solid gg-printer"></i>
            </span>
            <span class="text">Print All</span>
        </a>
    </div>
</div>


<!-- Icon -->
<link href='http://localhost/peduli_diri/printer.css' rel='stylesheet'>