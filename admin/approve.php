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
                        <th>NO</th>
                        <th style="width: 10%;">NIK</th>
                        <th style="width: 20%;">Nama Lengkap</th>
                        <th style="width: 10%;">Username</th>
                        <th style="width: 15%;">Jenis Kelamin</th>
                        <th style="width: 10%;">Password</th>
                        <th style="width: 10%;">Status</th>
                        <th style="width: 30%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    include 'koneksi.php';
                    $sql = "SELECT * FROM user WHERE status != 1";
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
                                <a href="admin/edit_user.php?nik=<?= $value['nik'] ?>" class=" btn btn-primary" name="terima">Terima</a>
                                <a href="admin/hapus_user.php?nik=<?= $value['nik'] ?>" class="btn btn-danger tolak-user">Tolak</a>
                            </td>
                        </tr>
                    <?php 
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>