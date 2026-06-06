<?php
include("includes/db.php");
include("includes/header.php");

$basari = "";
$hata = "";

/* Hizmetleri veritabanından çekiyoruz */
$hizmetSorgu = $conn->query("SELECT * FROM hizmetler");
$hizmetler = $hizmetSorgu->fetchAll(PDO::FETCH_ASSOC);

/* Uzmanları veritabanından çekiyoruz */
$uzmanSorgu = $conn->query("SELECT * FROM uzmanlar");
$uzmanlar = $uzmanSorgu->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ad = $_POST["ad"] ?? "";
    $tel = $_POST["tel"] ?? "";
    $email = $_POST["email"] ?? "";
    $hizmet_id = $_POST["hizmet_id"] ?? "";
    $uzman_id = $_POST["uzman_id"] ?? "";
    $tarih = $_POST["tarih"] ?? "";
    $saat = $_POST["saat"] ?? "";
    $mesaj = $_POST["mesaj"] ?? "";

    if($ad == "" || $tel == "" || $email == "" || $hizmet_id == "" || $uzman_id == "" || $tarih == "" || $saat == ""){
        $hata = "Lütfen tüm zorunlu alanları doldurunuz.";
    } else {
        $sql = "INSERT INTO randevu_talepleri
                (ad_soyad, telefon, email, hizmet_id, uzman_id, tarih, saat, mesaj, durum, kayit_tarihi)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'Bekliyor', NOW())";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$ad, $tel, $email, $hizmet_id, $uzman_id, $tarih, $saat, $mesaj]);

        $basari = "Randevu talebiniz başarıyla gönderildi.";
    }
}
?>

<h1 class="section-title text-center">Randevu Oluştur</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card custom-card p-4">
            <?php if($basari): ?>
                <div class="alert alert-success"><?= $basari ?></div>
            <?php endif; ?>
            <?php if($hata): ?>
    <div class="alert alert-danger"><?= $hata ?></div>
<?php endif; ?>

           <form method="post">

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Ad Soyad</label>
            <input type="text" name="ad" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Telefon</label>
            <input type="text" name="tel" class="form-control" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">E-posta</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Hizmet Seçiniz</label>
            <select name="hizmet_id" class="form-control" required>
                <option value="">Hizmet seçiniz</option>

                <?php foreach($hizmetler as $hizmet): ?>
                    <option value="<?= $hizmet['id'] ?>">
                        <?= $hizmet['baslik'] ?> - <?= $hizmet['fiyat'] ?> TL
                    </option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Uzman Seçiniz</label>
            <select name="uzman_id" class="form-control" required>
                <option value="">Uzman seçiniz</option>

                <?php foreach($uzmanlar as $uzman): ?>
                    <option value="<?= $uzman['id'] ?>">
                        <?= $uzman['ad_soyad'] ?> - <?= $uzman['uzmanlik'] ?>
                    </option>
                <?php endforeach; ?>

            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Tarih Seçiniz</label>
            <input type="date" name="tarih" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Saat Seçiniz</label>
            <input type="time" name="saat" class="form-control" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Mesaj</label>
        <textarea name="mesaj" class="form-control" rows="4" placeholder="Eklemek istediğiniz not varsa yazabilirsiniz."></textarea>
    </div>

    <button type="submit" class="btn btn-pink w-100">Randevu Talebi Gönder</button>

</form>

<?php include("includes/footer.php"); ?>