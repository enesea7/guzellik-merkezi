<?php
include("kontrol.php");
include("../includes/db.php");

$uzmanlar = $conn->query("SELECT * FROM uzmanlar ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Uzman Yönetimi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#fff5f8;">

<nav class="navbar navbar-expand-lg" style="background:linear-gradient(90deg,#e75480,#ff8fb3);">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="index.php">Admin Paneli</a>

        <div>
            <a href="index.php" class="text-white text-decoration-none me-3">Anasayfa</a>
            <a href="hizmetler.php" class="text-white text-decoration-none me-3">Hizmetler</a>
            <a href="uzmanlar.php" class="text-white text-decoration-none me-3">Uzmanlar</a>
            <a href="randevular.php" class="text-white text-decoration-none me-3">Randevular</a>
            <a href="logout.php" class="text-white text-decoration-none">Çıkış Yap</a>
        </div>
    </div>
</nav>

<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold" style="color:#c2185b;">Uzman Yönetimi</h1>
            <p>Uzmanları listele, ekle, güncelle veya sil.</p>
        </div>

        <a href="uzman_ekle.php" class="btn btn-success">Yeni Uzman Ekle</a>
    </div>

    <div class="card shadow border-0 p-4">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Resim</th>
                    <th>Ad Soyad</th>
                    <th>Uzmanlık</th>
                    <th>Açıklama</th>
                    <th width="180">İşlemler</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($uzmanlar as $uzman): ?>
                    <tr>
                        <td><?= $uzman["id"] ?></td>

                        <td>
                            <?php if(!empty($uzman["resim"])): ?>
                                <img src="../assets/images/<?= htmlspecialchars($uzman["resim"]) ?>" 
                                     alt="Uzman Resmi" 
                                     style="width:70px; height:70px; object-fit:cover; border-radius:50%;">
                            <?php else: ?>
                                <span class="text-muted">Resim yok</span>
                            <?php endif; ?>
                        </td>

                        <td><?= htmlspecialchars($uzman["ad_soyad"]) ?></td>
                        <td><?= htmlspecialchars($uzman["uzmanlik"]) ?></td>
                        <td><?= htmlspecialchars($uzman["aciklama"]) ?></td>

                        <td>
                            <a href="uzman_guncelle.php?id=<?= $uzman["id"] ?>" class="btn btn-warning btn-sm">Güncelle</a>

                            <a href="uzman_sil.php?id=<?= $uzman["id"] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Bu uzmanı silmek istediğinize emin misiniz?');">
                               Sil
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</div>

</body>
</html>