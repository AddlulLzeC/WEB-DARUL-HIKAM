<?php
$kelas = array();

$ambil = $conn->query("SELECT * FROM kelas 
                    LEFT JOIN jurusanakademik ON kelas.id_jurusan=jurusanakademik.id_jurusan
                    LEFT JOIN tahun ON kelas.id_tahun=tahun.id_tahun
                    ");
while ($tiap = $ambil->fetch_assoc()) {
    $kelas[] = $tiap;
}
?>
<h1>Halaman Data kelas</h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Jenjang</th>
            <th>Kelas</th>
            <th>Ruang</th>
            <th>Jenjang</th>
            <th>Opsi</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($kelas as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['tahun_ajaran'] ?></td>
                <td><?php echo $value['nama_jurusan'] ?></td>
                <td><?php echo $value['nama_kelas'] ?></td>
                <td><?php echo $value['ruang_kelas'] ?></td>
                <td><?php echo $value['jenjang_kelas'] ?></td>
                <td>
                    <a href="indexakademik.php?halaman=siswakelas&id=<?php echo $value['id_kelas'] ?>" class="btn btn-outline-info btn-sm">Detail</a>
                </td>
            </tr>
    </tbody>
<?php endforeach ?>

</table>