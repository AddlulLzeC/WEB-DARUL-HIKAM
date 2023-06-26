<?php
$kategori = array();

$ambil = $conn->query("SELECT * FROM kategori");
while ($tiap = $ambil->fetch_assoc()) {
    $kategori[] = $tiap;
}
?>
<h1>Halaman Data Kategori </h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Kategori Muatan</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($kategori as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['nama_kategori']; ?></td>
            </tr>
    </tbody>
<?php endforeach ?>
</table>