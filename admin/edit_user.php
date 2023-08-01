<?php

include './koneksi.php';

if (isset($_GET["nik"])) {
    $sql = "UPDATE user set status=true where nik='" . $_GET['nik'] . "'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='dist/sweetalert2.all.min.js'></script>
    <script type='text/javascript'>
            setTimeout(function() {
                Swal.fire({
                    title: 'Sukses',
                    text: 'User telah diterima',
                    icon: 'success',
                    showConfirmButton: false
                });
            });
            window.setTimeout(function() {
                window.location.replace('../admin.php?url=user');
            }, 1200);
        </script>
        ";
    } else {
        echo "
        
        ";
    }
}
