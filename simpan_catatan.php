<?php

session_start();
$nik = $_SESSION['nik'];
$tanggal = $_POST['tgl'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

include'koneksi.php';
$sql = "INSERT INTO catatan(nik,tgl,waktu,lokasi,suhu) 
VALUES ('$nik','$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($koneksi,$sql);

 $_SESSION["sukses"] = 'Data Berhasil Disimpan';
 header('Location: user.php');


 