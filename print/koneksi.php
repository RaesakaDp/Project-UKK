<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "peduli";
$koneksi = mysqli_connect("$server", "$username", "$password");
$select_db = mysqli_select_db($koneksi, $database);
if (!$select_db) {
    echo ("connection terminated");
}
