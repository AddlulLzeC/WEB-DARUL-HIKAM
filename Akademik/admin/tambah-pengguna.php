<?php include 'header.php'; ?>

<!--content-->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Tambah Pengguna
            </div>
            <div class="box-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" placeholder="Username" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="level" class="input-control" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" value="Simpan" class="btn btn-green" style="background-color: #116530;">Simpan</button>
                    <button type="button" class="btn btn-red" onclick="window.location.href = 'pengguna.php'" style="background-color: #808080;">Kembali</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $nama = addslashes(ucwords($_POST['nama']));
                    $user = addslashes($_POST['user']);
                    $level = $_POST['level'];
                    $pass = '123456';

                    $cek = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$user'");
                    if (mysqli_num_rows($cek) > 0) {
                        echo '<div class="alert alert-danger">Username sudah digunakan!</div>';
                    } else {
                        $simpan = mysqli_query($conn, "INSERT INTO pengguna (nama, username, password, level) VALUES (
                            '$nama',
                            '$user',
                            MD5('$pass'),
                            '$level'
                        )");

                        if ($simpan) {
                            echo '<div class="alert alert-success">Data Berhasil Disimpan!</div>';
                        } else {
                            echo '<div class="alert alert-danger">Data Gagal Disimpan!</div>' . mysqli_error($conn);
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>