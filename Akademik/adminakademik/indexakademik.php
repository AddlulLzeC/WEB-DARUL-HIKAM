<?php
include '../koneksi.php';
date_default_timezone_set("asia/Jakarta");

$identitas = mysqli_query($conn, "SELECT * FROM profile_sekolah ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_object($identitas);

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <link rel="icon" href="../uploads/identitas/<?= $d->favicon ?>">
    <title> Dashboard <?= $d->nama ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cssakademik/dashboardakademik.css" rel="stylesheet">
</head>

<body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#"><?= $d->nama ?></a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>

        <div id="navbarSearch" class="navbar-search w-100 collapse">
            <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Darul Hikam</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="indexakademik.php">
                                    <i class="bi bi-house"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=tahun">
                                    <i class="bi bi-calendar"></i>
                                    Tahun
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=guru">
                                    <i class="bi bi-person-badge"></i>
                                    Guru
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=siswa">
                                    <i class="bi bi-person"></i>
                                    Siswa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=jurusan">
                                    <i class="bi bi-archive"></i>
                                    Jenjang
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=kelas">
                                    <i class="bi bi-bank"></i>
                                    Kelas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=kategori">
                                    <i class="bi bi-tag"></i>
                                    Kategori
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=mapel">
                                    <i class="bi bi-book"></i>
                                    Mata Pelajaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=mengajar">
                                    <i class="bi bi-controller"></i>
                                    Mengajar
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <span>Laporan</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <i class="bi bi-file-arrow-down"></i>
                                <svg class="bi">
                                    <use xlink:href="#plus-circle" />
                                </svg>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=laporan_nilai">
                                    <i class="bi bi-file-pdf"></i>
                                    Nilai
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="indexakademik.php?halaman=laporan_siswa">
                                    <i class="bi bi-graph-up"></i>
                                    Statistik Siswa
                                </a>
                            </li>
                        </ul>

                        <hr class="my-3">

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi bi-gear"></i>

                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="../login.php">
                                    <i class="bi bi-box-arrow-right"></i>

                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">


                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "tahun") {
                        include 'tahun.php';
                    } else if ($_GET['halaman'] == "guru") {
                        include 'guru.php';
                    } else if ($_GET['halaman'] == "mengajar") {
                        include 'mengajar.php';
                    } else if ($_GET['halaman'] == "siswa") {
                        include 'siswa.php';
                    } else if ($_GET['halaman'] == "jurusan") {
                        include 'jurusan.php';
                    } else if ($_GET['halaman'] == "mapel") {
                        include 'mapel.php';
                    } else if ($_GET['halaman'] == "laporan_nilai") {
                        include 'laporan_nilai.php';
                    } else if ($_GET['halaman'] == "laporan_siswa") {
                        include 'laporan_siswa.php';
                    } else if ($_GET['halaman'] == "kelas") {
                        include 'kelas.php';
                    } else if ($_GET['halaman'] == "kategori") {
                        include 'kategori.php';
                    } else if ($_GET['halaman'] == "siswakelas") {
                        include 'siswakelas.php';
                    } else if ($_GET['halaman'] == "guru_tambah") {
                        include 'guru_tambah.php';
                    }
                } else {

                    include 'dashboard.php';
                }

                ?>


            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-UIDANAZnBHeqEIIVSCgzq+c9gQGAJnSc/t993yeKa9xxaYpSvHUSawsuZvVFIhvj" crossorigin="anonymous"></script>
</body>

</html>