<?php
include("kontrol.php");
include("../includes/db.php");

$hata = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ad_soyad = $_POST["ad_soyad"] ?? "";
    $uzmanlik = $_POST["uzmanlik"] ?? "";
    $resim = $_POST["resim"] ?? "";
    $aciklama = $_POST["aciklama"] ?? "";

    if($ad_soyad == "" || $uzmanlik == "" || $aciklama == ""){
        $hata = "Lütfen ad soyad, uzmanlık ve açıklama alanlarını doldurunuz.";
    } else {
        $sql = "INSERT INTO uzmanlar (ad_soyad, uzmanlik, resim, aciklama) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ad_soyad, $uzmanlik, $resim, $aciklama]);

        header("Location: uzmanlar.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Uzman Ekle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fff5f8;">

<div class="container my-5">
    <div class="card p-4 shadow border-0">
        <h1 class="mb-4 fw-bold" style="color:#c2185b;">Yeni Uzman Ekle</h1>

        <?php if($hata): ?>
            <div class="alert alert-danger"><?= $hata ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Ad Soyad</label>
                <input type="text" name="ad_soyad" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Uzmanlık</label>
                <input type="text" name="uzmanlik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Resim Dosya Adı</label>
                <input type="text" name="resim" class="form-control" placeholder="ornek: ayse.jpg">
                <small class="text-muted">
                    Resim dosyasını assets/images klasörüne koyarsan burada dosya adını yazabilirsin.
                </small>
            </div>

            <div class="mb-3">
                <label class="form-label">Açıklama</label>
                <textarea name="aciklama" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Kaydet</button>
            <a href="uzmanlar.php" class="btn btn-secondary">Geri Dön</a>
        </form>
    </div>
</div>

</body>
</html>