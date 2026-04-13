<?php
include("includes/db.php");
include("includes/header.php");

$sorgu = $conn->query("SELECT * FROM hizmetler WHERE durum = 1 LIMIT 6");
$hizmetler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Güzelliğinize Profesyonel Dokunuş</h1>
        <p class="lead">Cilt bakımı, lazer epilasyon, kaş tasarımı ve daha fazlası</p>
        <a href="randevu.php" class="btn btn-light btn-lg mt-3">Randevu Oluştur</a>
    </div>
</div>

<h2 class="section-title text-center">Öne Çıkan Hizmetlerimiz</h2>

<div class="row">
    <?php foreach($hizmetler as $hizmet): ?>
        <div class="col-md-4 mb-4">
            <div class="card custom-card h-100">
                <div class="card-body">
                    <h4 class="card-title"><?= $hizmet["baslik"] ?></h4>
                    <p class="card-text"><?= $hizmet["aciklama"] ?></p>
                    <p class="fw-bold text-danger"><?= $hizmet["fiyat"] ?></p>
                    <a href="randevu.php" class="btn btn-pink">Randevu Al</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <div class="card custom-card p-4">
            <h3 class="section-title">Neden Biz?</h3>
            <p>Uzman kadromuz, hijyenik ortamımız ve modern uygulamalarımız ile müşterilerimize güvenli ve kaliteli hizmet sunuyoruz.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card custom-card p-4">
            <h3 class="section-title">Hemen Randevu Oluştur</h3>
            <p>İhtiyacınıza uygun bakım hizmetini seçin, size en uygun zamanda randevu talebinizi oluşturun.</p>
            <a href="randevu.php" class="btn btn-pink">Randevu Sayfasına Git</a>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>