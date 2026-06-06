<?php
include("kontrol.php");
include("../includes/db.php");

$hizmetler = $conn->query("SELECT * FROM hizmetler ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hizmet Yönetimi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #fff5f8;
        }

        .admin-navbar {
            background: linear-gradient(90deg, #e75480, #ff8fb3);
            padding: 15px 0;
        }

        .admin-navbar a {
            color: white;
            text-decoration: none;
            margin-right: 18px;
            font-weight: 600;
        }

        .panel-box {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h1 {
            color: #c2185b;
            font-weight: 800;
        }
    </style>
</head>
<body>

<div class="admin-navbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <a href="index.php">Admin Paneli</a>
            <a href="hizmetler.php">Hizmetler</a>
            <a href="uzmanlar.php">Uzmanlar</a>
            <a href="randevular.php">Randevular</a>
        </div>

        <div>
            <span class="text-white me-3"><?= $_SESSION["admin_ad"] ?></span>
            <a href="logout.php">Çıkış Yap</a>
        </div>
    </div>
</div>

<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Hizmet Yönetimi</h1>
            <p>Hizmetleri listele, ekle, güncelle veya sil.</p>
        </div>

        <a href="hizmet_ekle.php" class="btn btn-success">Yeni Hizmet Ekle</a>
    </div>

    <div class="panel-box">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>Fiyat</th>
                    <th>Durum</th>
                    <th width="180">İşlemler</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($hizmetler as $hizmet): ?>
                    <tr>
                        <td><?= $hizmet["id"] ?></td>
                        <td><?= htmlspecialchars($hizmet["baslik"]) ?></td>
                        <td><?= htmlspecialchars($hizmet["aciklama"]) ?></td>
                        <td><?= htmlspecialchars($hizmet["fiyat"]) ?> TL</td>
                        <td>
                            <?php if(isset($hizmet["durum"]) && $hizmet["durum"] == 1): ?>
                                <span class="badge bg-success">Aktif</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">Pasif</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="hizmet_guncelle.php?id=<?= $hizmet["id"] ?>" class="btn btn-warning btn-sm">Güncelle</a>
                            <a href="hizmet_sil.php?id=<?= $hizmet["id"] ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Bu hizmeti silmek istediğinize emin misiniz?');">
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