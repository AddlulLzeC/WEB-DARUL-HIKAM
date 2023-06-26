<?php
$mengajar = array();

$ambil = $conn->query("SELECT * FROM mengajar 
                LEFT JOIN guru ON mengajar.id_guru=guru.id_guru
                LEFT JOIN mapel ON mengajar.id_mapel=mapel.id_mapel
                LEFT JOIN kategori ON  mapel.id_kategori=kategori.id_kategori
                LEFT JOIN kelas ON mengajar.id_kelas=kelas.id_kelas
                LEFT JOIN jurusanakademik ON kelas.id_jurusan=jurusanakademik.id_jurusan
                LEFT JOIN tahun ON kelas.id_tahun=tahun.id_tahun
                ");
while ($tiap = $ambil->fetch_assoc()) {
    $mengajar[] = $tiap;
}
?>
<h1>Data mengajar</h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Guru</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Semester</th>
            <th>KKM</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($mengajar as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td>
                    <?php echo $value['nama_guru'] ?><br>
                    <i class="small"><?php echo $value['induk_guru'] ?></i>
                </td>
                <td>
                    <?php echo $value['nama_mapel'] ?><br>
                    <i class="small"><?php echo $value['nama_kategori'] ?></i>
                </td>
                <td>
                    <?php echo $value['nama_kelas'] ?><br>
                    <i class="small"><?php echo $value['nama_jurusan'] ?></i><br>
                    <?php echo $value['ruang_kelas'] ?><br>
                    <i class="small"><?php echo $value['tahun_ajaran'] ?></i><br>
                </td>
                <td><?php echo $value['semester'] ?></td>
                <td><?php echo $value['kkm'] ?></td>

            </tr>
    </tbody>
<?php endforeach ?>

</table>