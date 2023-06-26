<?php include 'headermain.php' ?>

<div class="section">
    <div class="container">

        <h3 class="text-center">Kontak</h3>
        <div class="col-4">
            <p style="margin-bottom: 10px;">Alamat : <br><?= $d->alamat ?></p>
            <p style="margin-bottom: 10px;">Telepon : <br><?= $d->telepon ?></p>
            <p style="margin-bottom: 10px;">Email : <br><?= $d->email ?></p>
        </div>

        <div class="box-gmaps">
            <iframe src="<?= $d->google_maps ?>" width="120%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<?php include 'footermain.php' ?>s