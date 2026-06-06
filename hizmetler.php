<?php
include("includes/db.php");
include("includes/header.php");

$sorgu = $conn->query("SELECT * FROM hizmetler WHERE durum = 1");
$hizmetler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="section-title text-center">Hizmetlerimiz</h1>

<div class="row">
    <?php foreach($hizmetler as $hizmet): ?>
        <div class="col-md-4 mb-4">
            <div class="card custom-card h-100">
                <div class="card-body">
                    <h4><?= $hizmet["baslik"] ?></h4>
                    <p><?= $hizmet["aciklama"] ?></p>
                    <p class="fw-bold text-danger"><?= $hizmet["fiyat"] ?></p>
                    <a href="randevu.php" class="btn btn-pink">Randevu Al</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include("includes/footer.php"); ?>