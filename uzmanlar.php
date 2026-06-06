<?php
include("includes/db.php");
include("includes/header.php");

$sorgu = $conn->query("SELECT * FROM uzmanlar");
$uzmanlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="section-title text-center">Uzman Kadromuz</h1>

<div class="row">
    <?php foreach($uzmanlar as $uzman): ?>
        <div class="col-md-4 mb-4">
            <div class="card custom-card h-100 text-center">
                <div class="card-body">
                    <h4><?= $uzman["ad_soyad"] ?></h4>
                    <p class="text-muted"><?= $uzman["uzmanlik"] ?></p>
                    <p><?= $uzman["aciklama"] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include("includes/footer.php"); ?>