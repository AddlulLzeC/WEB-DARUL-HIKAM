<?php
$mapel = array();

$ambil = $conn->query("SELECT * FROM mapel 
                    LEFT JOIN kategori ON mapel.id_kategori=kategori.id_kategori");
while ($tiap = $ambil->fetch_assoc()) {
    $mapel[] = $tiap;
}
?>
<h1>Halaman Data Mata Pelajaran</h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Kategori Muatan</th>
            <th>Mata Pelajaran</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($mapel as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['nama_kategori'] ?></td>
                <td><?php echo $value['nama_mapel'] ?></td>
            </tr>
    </tbody>
<?php endforeach ?>

</table>