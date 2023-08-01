<?php
session_start();
include 'koneksi.php';
$data = $_GET['id_catatan'];

// $id_catatan     = $_GET['id_catatan'];
// $nik            = $_GET['nik'];
// $tanggal        = $_GET['tgl'];
// $waktu          = $_GET['waktu'];
// $lokasi         = $_GET['lokasi'];
// $suhu           = $_GET['suhu'];

// include'koneksi.php';
// $sql = "DELETE catatan WHERE id_catatan='$id_catatan'";
// $query = mysqli_query($koneksi, $sql);


$hapus = mysqli_query($koneksi, "DELETE FROM catatan WHERE id_catatan=" . $data);
if ($hapus) {
    $_SESSION["sukses"] = 'Data Berhasil Dihapus';
    header('Location: user.php?url=catatan_perjalanan');
}
