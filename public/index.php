<?php include_once "../src/partials/headerHome.php" ?>

<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <h1>Keindahan Destinasi</h1>
                <h2>Pesan dan Jelajahi Tempat-Tempat Menakjubkan Bersama Kami</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#paket" class="btn btn-primary">Pilih Paket Sekarang</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img pt-3">
                <img src="../src/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<section id="clients" class="clients">
    <div class="container">
        <h2 class="text-center mb-5">Destinasi</h2>
        <div class="row col-lg-12 mx-auto">
            <?php require "../Data/dataList.php";
            foreach ($kotaDestinasi as $destinasi => $kota) : ?>
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <div class="destinasi_logo-wrapper">
                        <h4><?= $kota[0] ?></h4>
                        <!-- <img src="../src/img/produk/<?= $kota[1] ?>" alt=""> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="comment" class="comment pt-2">
    <div class="container">
        <h2 class="text-center mb-5">Testimoni</h2>
        <div class="row pt-2">

            <?php require "../Data/dataList.php";
            foreach ($commentList as $comment) : ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text"><?= $comment['comment'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<section id="paket" class="paket">
    <div class="px-4 py-5">
        <hr>
    </div>
    <div class="container">
        <h2 class="text-center mb-5">Paket</h2>
        <div class="row">
            <?php
            require "../Data/dataList.php";
            foreach ($destinasiList as $destinasi => $data) {
            ?>
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="../src/img/Produk/<?= $data[3] ?>" class="card-img-top rounded mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data[0] ?></h5>
                        <p class="card-text"><?= $data[1] ?></p>
                        <p class="h6 mb-2">Rp.<?= number_format($data[2]) ?></p>
                        <a href="transaksi.php?id=<?= $destinasi ?>" class="btn btn-primary">Book Now!</a>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    </div>
</section>


<?php include_once "../src/partials/footer.php" ?>