<?php
//mengaktifkan session
session_start();

header("Content-type: image/png");

// menentukan session
$_SESSION["Captcha"] = "";

// membuat gambar dengan menentukan ukuran
$gbr = imagecreate(150, 50);

//warna background captcha
imagecolorallocate($gbr, 0, 0, 0);

// pengaturan font captcha
$color = imagecolorallocate($gbr, 253, 252, 252);
//$font = "Queen Allura.otf";
$ukuran_font = 20;
$posisi = 32;
// membuat nomor acak dan ditampilkan pada gambar

for ($i = 0; $i <= 5; $i++) {
    // jumlah karakter
    $angka = rand(0, 9);

    $_SESSION["Captcha"] .= $angka;

    $kemiringan = rand(20, 20);

    // imagettftext($gbr, $ukuran_font, $kemiringan, 8 + 15 * $i, $posisi, $color, $font, $angka);
}
imagestring($gbr, 20, 50, 15, $_SESSION['Captcha'], $color);
//untuk membuat gambar 
imagepng($gbr);
imagedestroy($gbr);
