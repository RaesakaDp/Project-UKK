<?php

session_start();
$id_catatan = $_POST['id_catatan'];
$tanggal = $_POST['tgl'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

include 'koneksi.php';
$sql = "UPDATE catatan SET tgl='$tanggal',waktu='$waktu',lokasi='$lokasi',suhu='$suhu' WHERE id_catatan='$id_catatan'";
$query = mysqli_query($koneksi, $sql);

$_SESSION["diedit"] = 'Data Berhasil Diedit';
header('Location: user.php?url=catatan_perjalanan');

