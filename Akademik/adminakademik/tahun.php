<?php
$tahun = array();

$ambil = $conn->query("SELECT * FROM tahun");
while ($tiap = $ambil->fetch_assoc()) {
    $tahun[] = $tiap;
}

?>
<h1> Halaman Tahun </h1>
<table class="table">
    <thread>
        <tr>
            <th>No</th>
            <th>Tahun Ajaran</th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($tahun as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['tahun_ajaran']; ?></td>
            </tr>
    </tbody>
<?php endforeach ?>
</table>