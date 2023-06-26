<?php include 'header.php' ?>

<!--content-->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Pengguna
            </div>
            <div class="box-body">
                <a href="tambah-pengguna.php" style="color: #18A558"><i class="fa fa-user-plus"></i> Tambah Pengguna</a>

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
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $where = "WHERE 1=1";
                        if (isset($_GET['key'])) {
                            $where .= " AND nama LIKE '%" . addslashes($_GET['key']) . "%' ";
                        }

                        $pengguna = mysqli_query($conn, "SELECT * FROM pengguna $where ORDER BY id DESC");
                        if (mysqli_num_rows($pengguna) > 0) {
                            while ($p = mysqli_fetch_array($pengguna)) {
                        ?>
                                <tr class="sub-column">
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $p['nama'] ?></td>
                                    <td><?= $p['username'] ?></td>
                                    <td><?= $p['level'] ?></td>
                                    <td>
                                        <a href="edit-pengguna.php?id=<?= $p['id'] ?>" title="Edit Data"><i class="fa fa-pen-to-square" style="color: #ff8300;"></i></a> |
                                        <a href="hapus.php?idpengguna=<?= $p['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus >')" title="Hapus Data"><i class="fa fa-xmark" style="color: #e43040;"></i></a>
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