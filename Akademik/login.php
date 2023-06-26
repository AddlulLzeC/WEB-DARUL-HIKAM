<?php
session_start();
include 'koneksi.php';
?>
<!doctype html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css internal-->
    <style>
        .page-login {
            background: url(assets/image/BG.jpg);
            background-size: cover;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- page login -->
    <div class="page-login">
        <!-- box -->
        <div class="box box-login">
            <!-- box header -->
            <div class="box-header text-center">
                Silahkan Login Terlebih Dahulu
            </div>
            <!-- box body -->
            <div class="box-body">
                <?php
                if (isset($_GET['msg'])) {
                    echo "<div class='alert alert-danger d-flex align-items-right'>" . $_GET['msg'] . "</div>";
                }

                ?>
                <!-- form login -->
                <form action="" method="POST">
                    <div class="form-group ">
                        <label>Username</label>
                        <input type="text" name="user" placeholder="Masukan Username" class="input-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Masukan Password" class="input-control">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="submit" name="submit" value="Login">Login</button>
                    </div>
                </form>
                <!-- proses login -->
                <?php
                if (isset($_POST['submit'])) {
                    $user = mysqli_real_escape_string($conn, $_POST['user']);
                    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                    $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '" . $user . "' ");
                    if (mysqli_num_rows($cek) > 0) {
                        $d = mysqli_fetch_object($cek);
                        if ($pass == $d->password) {

                            $_SESSION['status login'] = true;
                            $_SESSION['user id']      = $d->id;
                            $_SESSION['uname']        = $d->nama;
                            $_SESSION['ulevel']       = $d->level;

                            echo "<script>window.location = 'admin/index.php'</script>";
                        } else {
                            echo '<div class="alert alert-danger d-flex align-items-right" role="alert"><div>
                                     Password Salah </div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger d-flex align-items-right" role="alert"><div>
                                 Username tidak ditemukan </div>';
                    }
                }
                ?>

            </div>

            <!-- box footer -->
            <div class="box-footer text-center">
                <a href="index.php" style="text-decoration:none">Halaman Utama</a>
            </div>

        </div>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>