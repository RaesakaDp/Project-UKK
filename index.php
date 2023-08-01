  <?php
  include 'koneksi.php';
  session_start();
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Login & Registrasi</title>
    <link rel="stylesheet" href="style1.css" />
    <link href="js/sweetalert.css" rel="stylesheet" />
    <link href="http://localhost/peduli_diri/sweetalert2.min.css" rel="stylesheet">
    <script src="http://localhost/peduli_diri/api.js"></script>

    <script src="http://localhost/peduli_diri/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://localhost/peduli_diri/sweetalert.min.js"></script>
    <script src="js/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert/animate.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="http://localhost/peduli_diri/jquery.min.js"></script>
    <script src="http://localhost/peduli_diri/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form id="login" method="POST" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="nik" name="nik" type="text" placeholder="NIK" maxlength="16" onkeypress="return Angka(event);" autocomplete="off" required />
            </div>
            <div class="input-field">
              <i class="fas fa-field"></i>
              <input type="text" placeholder="Username" id="username" name="username" required autocomplete="off" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pswd" id="pswd" maxlength="8" required />
            </div>
            <!-- <input type="button" name="login" value="Masuk" class="btn solid" /> -->
            <button type="submit" class="btn btn-primary" onclick="login();" name="login"></i>Login</button>

          </form>
          <form id="register" method="POST" class="sign-up-form">
            <h2 class="title">Registrasi</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="nik" name="nik" type="text" placeholder="NIK" required maxlength="16" onkeypress="return Angka(event);" autocomplete="off" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" required autocomplete="off" onkeypress="return Huruf(event);" />
            </div>
            <div class="input-field">
              <i class="fas fa-field"></i>
              <input type="text" placeholder="Username" id="username" name="username" required autocomplete="off" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" placeholder="Jenis Kelamin" required name="jenkel" id="jenkel" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pswd" id="pswd" maxlength="8" required />
            </div>
            <br>
            <div class="form-group">
            <label for="captcha" class="mb-1 mt-2 " id="captcha" name="captcha"></label>
            <img src="captcha.php" alt="gambar" class="mb-3">
          </div>
          <div class="input-field" class="mb-1 mt-2">
            <label for="captcha"></label>
            <input type="text" class="form-control mb-0" id="captcha" name="captcha" placeholder="Masukkan Kode Captcha" autocomplete="off" required>
          </div>
            <button type="submit" name="register" class="btn btn-primary"></i>Register</button>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Punya Akun ?</h3>
            <p>
              Daftar Sekarang juga, Dan
              <br>
              Buatlah Catatan Perjalanan !
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrasi
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>
              Masuk Sekarang Dan Buatlah Catatan Perjalanan !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
      // function angka       
      function Angka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          Swal.fire({
            title: 'Data tidak Valid',
            text: 'Kolom NIK Hanya Dapat diisi Angka !!',
            icon: 'warning',
            showConfirmButton: true
          });
          return false;
        }
        return true;
      }
      // function huruf
      function Huruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32) {
          Swal.fire({
            title: 'Data tidak Valid',
            text: 'Kolom Nama hanya dapat diisi dengan huruf !!',
            icon: 'warning',
            showConfirmButton: true
          });
          return false;
        }
        return true;
      }
      // validasi register
      function validasiReg() {

      }
      // function captcha
      function Captcha(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          Swal.fire({
            title: 'Data tidak Valid',
            text: 'Kolom Captcha Hanya Dapat Diisi Angka !!',
            icon: 'warning',
            showConfirmButton: true
          });
          return false;
        }
        return true;
      }
    </script>

    <script src="app.js"></script>
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='js/sweetalert/dist/sweetalert2.all.min.js'></script>
    <script src="http://localhost/peduli_diri/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://localhost/peduli_diri/sweetalert2@11"></script>
    <script src="js/sweetalert/animate.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.css"></script>
    <script src="js/sweetalert/sweetalert2.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert/dist/sweetalert2.all.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script src="http://localhost/peduli_diri/bootstrap.min3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/js/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/sweetshow.js"></script>


    <script src="http://localhost/peduli_diri/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="http://localhost/peduli_diri/bootstrap.bundle.min4.5.3.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <?php
    // register
    if (isset($_POST["register"])) {
      if (isset($_SESSION['Captcha']) && $_SESSION['Captcha'] != $_POST['captcha']) {
        echo "
              <script type='text/javascript'>
                setTimeout(function(){
                    Swal.fire({
                        title: 'Register Gagal',
                        text: 'Captcha Yang Anda Masukkan Salah !',
                        icon: 'error',
                        showConfirmButton: true
                    });
                });
            </script>
        ";
      } else {
        $nik          = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $username     = $_POST['username'];
        $jenkel       = $_POST['jenkel'];
        $pswd         = $_POST['pswd'];

        $query_validasi = "SELECT * FROM user WHERE nik = '$nik'";
        $query = mysqli_query($koneksi, $query_validasi);

        if (mysqli_num_rows($query) == 0) {
          $query_register = mysqli_query($koneksi, "INSERT INTO user (nik, nama_lengkap, username, jenkel, pswd) VALUES ('$nik', '$nama_lengkap', '$username', '$jenkel', '$pswd')");
          if ($query_register) {
            echo "
            <script type='text/javascript'>
          setTimeout(function(){
              Swal.fire({
                  title: 'Register Berhasil',
                  text: 'Akun Anda segera aktif',
                  icon: 'success',
                  showConfirmButton: true
              });
          });
        </script>
      ";
          } else {
            echo "
            <script type='text/javascript'>
              setTimeout(function(){
                  Swal.fire({
                      title: 'Login Gagal',
                      text: 'Pastikan NIK dan Nama Anda Benar',
                      icon: 'error',
                      showConfirmButton: true
                  });
              });
          </script>
      ";
          }
        }
      }
    }


    // login
    if (isset($_POST["login"])) {
      $nik          = $_POST['nik'];
      $username     = $_POST['username'];
      $pswd         = $_POST['pswd'];

      $loginuser  = mysqli_query($koneksi, "SELECT * FROM user WHERE nik='$nik' AND username='$username' AND pswd='$pswd' ");
      $loginadmin  = mysqli_query($koneksi, "SELECT * FROM admin WHERE nik='$nik' AND username='$username' AND pswd='$pswd' ");
      $data1 = mysqli_fetch_array($loginadmin);
      $data2 = mysqli_fetch_array($loginuser);


      if (mysqli_num_rows($loginadmin) && $data1['status'] == true) {
        $_SESSION['nik']        = $nik;
        $_SESSION['username']   = $username;
        $_SESSION['pswd']       = $pswd;

        echo "
            <script type='text/javascript'>
              setTimeout(function(){
                  Swal.fire({
                      title: 'Selamat',
                      text: 'Login Berhasil',
                      icon: 'success',
                      showConfirmButton: false
                  });
              });
              window.setTimeout (function(){
                  window.location.replace('admin.php');
              },1200);
            </script>
      ";
      } else if (mysqli_num_rows($loginuser) && $data2['status'] == true) {
        $_SESSION['nik']        = $nik;
        $_SESSION['username']   = $username;
        $_SESSION['pswd']       = $pswd;

        echo "
            <script type='text/javascript'>
              setTimeout(function(){
                  Swal.fire({
                      title: 'Selamat',
                      text: 'Login Berhasil',
                      icon: 'success',
                      showConfirmButton: false
                  });
              });
              window.setTimeout (function(){
                  window.location.replace('user.php');
              },1200);
          </script>
      ";
      } elseif (mysqli_num_rows($loginadmin) && $data1['status'] != true) {
        echo "
            <script type='text/javascript'>
            setTimeout(function(){
                Swal.fire({
                    title: 'Login Gagal',
                    text: 'Akun anda belum aktif',
                    icon: 'error',
                    showConfirmButton: true
                });
            });
        </script>
    ";
      } elseif (mysqli_num_rows($loginuser) && $data2['status'] != true) {
        echo "
            <script type='text/javascript'>
            setTimeout(function(){
                Swal.fire({
                    title: 'Login Gagal',
                    text: 'Akun anda belum aktif',
                    icon: 'error',
                    showConfirmButton: true
                });
            });
        </script>
    ";
      } else {
        echo "
            <script type='text/javascript'>
              setTimeout(function(){
                  Swal.fire({
                      title: 'Login Gagal',
                      text: 'Pastikan NIK dan Nama Anda Benar',
                      icon: 'error',
                      showConfirmButton: true
                  });
              });
          </script>
      ";
      }
    }

    ?>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script> -->
  </body>

  </html>