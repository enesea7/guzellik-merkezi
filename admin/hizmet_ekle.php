<?php
include("kontrol.php");
include("../includes/db.php");

$hata = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $baslik = $_POST["baslik"] ?? "";
    $aciklama = $_POST["aciklama"] ?? "";
    $fiyat = $_POST["fiyat"] ?? "";
    $durum = $_POST["durum"] ?? 1;

    if($baslik == "" || $aciklama == "" || $fiyat == ""){
        $hata = "Lütfen tüm alanları doldurunuz.";
    } else {
        $sql = "INSERT INTO hizmetler (baslik, aciklama, fiyat, durum) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$baslik, $aciklama, $fiyat, $durum]);

        header("Location: hizmetler.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hizmet Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fff5f8;">

<div class="container my-5">
    <div class="card p-4 shadow">
        <h1 class="mb-4">Yeni Hizmet Ekle</h1>

        <?php if($hata): ?>
            <div class="alert alert-danger"><?= $hata ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Hizmet Başlığı</label>
                <input type="text" name="baslik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Açıklama</label>
                <textarea name="aciklama" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Fiyat</label>
                <input type="number" name="fiyat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Durum</label>
                <select name="durum" class="form-control">
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Kaydet</button>
            <a href="hizmetler.php" class="btn btn-secondary">Geri Dön</a>
        </form>
    </div>
</div>

</body>
</html>