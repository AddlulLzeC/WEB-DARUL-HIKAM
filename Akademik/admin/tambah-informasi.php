<?php include 'header.php'; ?>

<!--content-->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Tambah Informasi
            </div>
            <div class="box-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" placeholder="Judul" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="input-control" placeholder="Keterangan" id="keterangan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="input-control" required>
                    </div>
                    <button type="submit" name="submit" value="Simpan" class="btn btn-green" style="background-color: #116530;">Simpan</button>
                    <button type="button" class="btn btn-red" onclick="window.location.href = 'informasi.php'" style="background-color: #808080;">Kembali</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    // print_r($_FILES['gambar']);

                    $judul = addslashes(ucwords($_POST['judul']));
                    $ket = addslashes($_POST['keterangan']);

                    $filename = $_FILES['gambar']['name'];
                    $tmpname  = $_FILES['gambar']['tmp_name'];
                    $filesize = $_FILES['gambar']['size'];

                    $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                    $rename     = 'informasi' . time() . '.' . $formatfile;

                    $allowedtype = array('png', 'jpg', 'jpeg', 'gif');

                    if (!in_array($formatfile, $allowedtype)) {

                        echo '<div class="alert alert-error">Format Tidak Sesuai!</div>';
                    } elseif ($filesize > 1000000) {

                        echo '<div class="alert alert-error">Ukuran File Terlalu Besar!</div>';
                    } else {
                        move_uploaded_file($tmpname, "../uploads/informasi/" . $rename);


                        $simpan = mysqli_query($conn, "INSERT INTO informasi (judul, keterangan, gambar) VALUES (
                            '$judul',
                            '$ket',
                            '$rename'
                        )");


                        if ($simpan) {
                            echo '<div class="alert alert-success">Data Berhasil Disimpan!</div>';
                        } else {
                            echo 'gagal simpan' . mysqli_error($conn);
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>