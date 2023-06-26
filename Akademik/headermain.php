<?php
include 'koneksi.php';
date_default_timezone_set("asia/Jakarta");

$identitas = mysqli_query($conn, "SELECT * FROM profile_sekolah ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_object($identitas);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
    <title> Website <?= $d->nama ?></title>
</head>

<body>

    <!-- Box menu mobile -->
    <div class="box-menu-mobile" id="mobileMenu">
        <span style="text-decoration: none;" onclick="hideMobileMenu()">Close</span>
        <ul class="text-center">
            <li><a style="text-decoration:none" href="index.php">Beranda</a></li>
            <li><a style="text-decoration:none" href="tentang-sekolah.php">Tentang Sekolah</a></li>
            <li><a style="text-decoration:none" href="jurusanmain.php">Jurusan</a></li>
            <li><a style="text-decoration:none" href="galerimain.php">Galeri</a></li>
            <li><a style="text-decoration:none" href="informasimain.php">Informasi</a></li>
            <li><a style="text-decoration:none" href="kontakmain.php">Kontak</a></li>
            <li><a style="text-decoration:none" href="login.php">Masuk</a></li>
        </ul>
    </div>

    <!-- Bagian header -->
    <div class="header">

        <div class="container">

            <div class="header-logo">
                <img src="uploads/identitas/<?= $d->logo ?>" width="75px">
                <h2><a style="text-decoration:none" href="index.php"><?= $d->nama ?></a></h2>
            </div>

            <ul class="header-menu">
                <li><a style="text-decoration:none" href="index.php">Beranda</a></li>
                <li><a style="text-decoration:none" href="tentang-sekolah.php">Tentang Sekolah</a></li>
                <li><a style="text-decoration:none" href="jurusanmain.php">Jurusan</a></li>
                <li><a style="text-decoration:none" href="galerimain.php">Galeri</a></li>
                <li><a style="text-decoration:none" href="informasimain.php">Informasi</a></li>
                <li><a style="text-decoration:none" href="kontakmain.php">Kontak</a></li>
                <li><a style="text-decoration:none" href="login.php">Masuk</a></li>
            </ul>

            <div class="mobile-menu-btn text-center">
                <a href="#" onclick="showMobileMenu()">Menu</a>
            </div>

        </div>

    </div>