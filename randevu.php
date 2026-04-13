<?php
include("includes/db.php");
include("includes/header.php");

$basari = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ad = $_POST["ad"];
    $tel = $_POST["tel"];
    $mesaj = $_POST["mesaj"];

    $sql = "INSERT INTO randevu_talepleri (ad_soyad, telefon, mesaj, durum, kayit_tarihi)
            VALUES (?, ?, ?, 'Bekliyor', NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$ad, $tel, $mesaj]);

    $basari = "Randevu talebiniz başarıyla gönderildi.";
}
?>

<h1 class="section-title text-center">Randevu Oluştur</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card custom-card p-4">
            <?php if($basari): ?>
                <div class="alert alert-success"><?= $basari ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Ad Soyad</label>
                    <input type="text" name="ad" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text" name="tel" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mesaj</label>
                    <textarea name="mesaj" class="form-control" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-pink">Gönder</button>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>