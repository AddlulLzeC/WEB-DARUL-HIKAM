<?php
$siswa = array();

$ambil = $conn->query("SELECT * FROM siswa LEFT JOIN tahun ON siswa.id_tahun=tahun.id_tahun");
while ($tiap = $ambil->fetch_assoc()) {
    $siswa[] = $tiap;
}

?>
<h1>Halaman Data siswa</h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Tahun Masuk</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Opsi</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($siswa as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['tahun_ajaran'] ?></td>
                <td><?php echo $value['induk_siswa'] ?></td>
                <td><?php echo $value['nama_siswa'] ?></td>
                <td><?php echo $value['kelamin_siswa'] ?></td>
                <td>
                    <a href="" class="btn btn-outline-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                </td>
            </tr>
    </tbody>
<?php endforeach ?>
</table>

<a href="" class="btn btn-outline-primary btn-sm">Tambah Data</a>