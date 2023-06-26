<?php
$jurusanakademik = array();

$ambil = $conn->query("SELECT * FROM jurusanakademik");
while ($tiap = $ambil->fetch_assoc()) {
    $jurusanakademik[] = $tiap;
}
?>
<h1>Halaman Data jurusan </h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Nama Jenjang</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($jurusanakademik as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['nama_jurusan']; ?></td>
            </tr>
    </tbody>
<?php endforeach ?>
</table>