<?php
include("kontrol.php");
include("../includes/db.php");

$sql = "SELECT 
            r.id,
            r.ad_soyad,
            r.telefon,
            r.email,
            r.tarih,
            r.saat,
            r.mesaj,
            r.durum,
            r.kayit_tarihi,
            h.baslik AS hizmet_adi,
            u.ad_soyad AS uzman_adi,
            u.uzmanlik AS uzmanlik
        FROM randevu_talepleri r
        LEFT JOIN hizmetler h ON r.hizmet_id = h.id
        LEFT JOIN uzmanlar u ON r.uzman_id = u.id
        ORDER BY r.id DESC";

$randevular = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Randevu Yönetimi</title>
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

<div class="container-fluid my-5 px-5">

    <div class="mb-4">
        <h1 class="fw-bold" style="color:#c2185b;">Randevu Yönetimi</h1>
        <p>Gelen randevu taleplerini listele ve durumlarını güncelle.</p>
    </div>

    <div class="card shadow border-0 p-4">

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Ad Soyad</th>
                        <th>Telefon</th>
                        <th>E-posta</th>
                        <th>Hizmet</th>
                        <th>Uzman</th>
                        <th>Tarih</th>
                        <th>Saat</th>
                        <th>Mesaj</th>
                        <th>Durum</th>
                        <th>Kayıt Tarihi</th>
                        <th width="210">İşlem</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($randevular as $randevu): ?>
                        <tr>
                            <td><?= $randevu["id"] ?></td>
                            <td><?= htmlspecialchars($randevu["ad_soyad"]) ?></td>
                            <td><?= htmlspecialchars($randevu["telefon"]) ?></td>
                            <td><?= htmlspecialchars($randevu["email"] ?? "-") ?></td>

                            <td>
                                <?= htmlspecialchars($randevu["hizmet_adi"] ?? "Seçilmemiş") ?>
                            </td>

                            <td>
                                <?php if($randevu["uzman_adi"]): ?>
                                    <?= htmlspecialchars($randevu["uzman_adi"]) ?><br>
                                    <small class="text-muted"><?= htmlspecialchars($randevu["uzmanlik"]) ?></small>
                                <?php else: ?>
                                    <span class="text-muted">Seçilmemiş</span>
                                <?php endif; ?>
                            </td>

                            <td><?= htmlspecialchars($randevu["tarih"] ?? "-") ?></td>
                            <td><?= htmlspecialchars($randevu["saat"] ?? "-") ?></td>
                            <td><?= htmlspecialchars($randevu["mesaj"] ?? "-") ?></td>

                            <td>
                                <?php if($randevu["durum"] == "Onaylandı"): ?>
                                    <span class="badge bg-success">Onaylandı</span>
                                <?php elseif($randevu["durum"] == "İptal Edildi"): ?>
                                    <span class="badge bg-danger">İptal Edildi</span>
                                <?php else: ?>
                                    <span class="badge bg-warning text-dark">Bekliyor</span>
                                <?php endif; ?>
                            </td>

                            <td><?= htmlspecialchars($randevu["kayit_tarihi"]) ?></td>

                            <td>
                                <form action="randevu_durum_guncelle.php" method="post" class="d-flex gap-2">
                                    <input type="hidden" name="id" value="<?= $randevu["id"] ?>">

                                    <select name="durum" class="form-select form-select-sm">
                                        <option value="Bekliyor" <?= $randevu["durum"] == "Bekliyor" ? "selected" : "" ?>>Bekliyor</option>
                                        <option value="Onaylandı" <?= $randevu["durum"] == "Onaylandı" ? "selected" : "" ?>>Onaylandı</option>
                                        <option value="İptal Edildi" <?= $randevu["durum"] == "İptal Edildi" ? "selected" : "" ?>>İptal Edildi</option>
                                    </select>

                                    <button type="submit" class="btn btn-primary btn-sm">Kaydet</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if(count($randevular) == 0): ?>
                        <tr>
                            <td colspan="12" class="text-center text-muted">
                                Henüz randevu talebi bulunmamaktadır.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>