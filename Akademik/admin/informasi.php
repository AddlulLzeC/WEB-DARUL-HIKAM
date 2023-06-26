<?php include 'header.php' ?>

<!--content-->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Informasi
            </div>
            <div class="box-body">
                <a href="tambah-informasi.php" style="color: #18A558"><i class="fa fa-user-plus"></i> Tambah</a>

                <?php
                if (isset($_GET['success'])) {
                    echo "<div class= 'alert alert-success'>" . $_GET['success'] . "</div>";
                }

                ?>

                <form action="">
                    <div class="input-group">
                        <input type="text" name="key" placeholder="Pencarian">
                        <button type="submit"><i class="fa fa-search"></i></button>

                    </div>
                </form>

                <table class="table">
                    <thead>
                        <tr class="sub-table">
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $where = "WHERE 1=1";
                        if (isset($_GET['key'])) {
                            $where .= " AND judul LIKE '%" . addslashes($_GET['key']) . "%' ";
                        }

                        $informasi = mysqli_query($conn, "SELECT * FROM informasi $where ORDER BY id DESC");
                        if (mysqli_num_rows($informasi) > 0) {
                            while ($p = mysqli_fetch_array($informasi)) {
                        ?>
                                <tr class="sub-column">
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $p['judul'] ?></td>
                                    <td><?= substr($p['keterangan'], 0, 100) ?></td>
                                    <td><img src="../uploads/informasi/<?= $p['gambar'] ?>" width="200" </td>
                                    <td>
                                        <a href="edit-informasi.php?id=<?= $p['id'] ?>" title="Edit Data"><i class="fa fa-pen-to-square" style="color: #ff8300;"></i></a> |
                                        <a href="hapus.php?idinformasi=<?= $p['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus >')" title="Hapus Data"><i class="fa fa-xmark" style="color: #e43040;"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">Data Tidak Ditemukan</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>