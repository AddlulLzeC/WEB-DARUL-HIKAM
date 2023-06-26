<?php
session_start();
include 'header.php';
?>

<!--content-->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Ubah Password
            </div>
            <div class="box-body">
                <form action="ubah-password.php" method="POST">
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ulangi Password</label>
                        <input type="password" name="pass2" placeholder="Ulangi Passsword" class="input-control" required>
                    </div>
                    <button type="button" class="btn btn-red" onclick="window.location = 'index.php'" style="background-color:  #808080;">Dashboard</button>
                    <button type="submit" name="submit" value="Ubah Password" class="btn btn-green" style="background-color: #116530;">Simpan</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $pass1 = addslashes($_POST['pass1']);
                    $pass2 = addslashes($_POST['pass2']);
                    $currdate = date('Y-m-d H:i:s');

                    if ($pass2 != $pass1) {
                        echo '<div class="alert-error">Ulangi Password tidak sesuai</div>';
                    } else {
                        if (isset($_SESSION['uid'])) {
                            $uid = $_SESSION['uid'];
                            $update = mysqli_query($conn, "UPDATE pengguna SET
                        password = '" . MD5($pass1) . "',
                        updated_at = '" . $currdate . "'
                        WHERE id = '" . $_SESSION['uid'] . "'
                        ");

                            if ($update) {
                                echo '<div class="alert alert-success">Ubah Password Berhasil!</div>';
                            } else {
                                echo 'Data Gagal Disimpan!' . mysqli_error($conn);
                            }
                        }
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>