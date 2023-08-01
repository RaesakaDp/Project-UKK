<?php

session_start();

include 'koneksi.php';

$data = $_GET['nik'];
$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE nik=" . $data);

if ($hapus) {
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    header('Location: ../admin.php?url=user');
}
