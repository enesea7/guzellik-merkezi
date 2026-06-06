<?php
include("kontrol.php");
include("../includes/db.php");

$hizmetSayisi = $conn->query("SELECT COUNT(*) FROM hizmetler")->fetchColumn();
$uzmanSayisi = $conn->query("SELECT COUNT(*) FROM uzmanlar")->fetchColumn();
$randevuSayisi = $conn->query("SELECT COUNT(*) FROM randevu_talepleri")->fetchColumn();
$bekleyenRandevu = $conn->query("SELECT COUNT(*) FROM randevu_talepleri WHERE durum = 'Bekliyor'")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Paneli</title>
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

        .admin-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            text-align: center;
        }

        .admin-card h3 {
            color: #c2185b;
            font-size: 36px;
            font-weight: 800;
        }

        .admin-card p {
            margin-bottom: 0;
            color: #555;
        }

        .panel-box {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
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
            <span class="text-white me-3">
                <?= $_SESSION["admin_ad"] ?>
            </span>
            <a href="logout.php">Çıkış Yap</a>
        </div>
    </div>
</div>

<div class="container my-5">

    <div class="mb-4">
        <h1>Yönetim Paneli</h1>
        <p>Güzellik merkezi web sitesi yönetim ekranı</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="admin-card">
                <h3><?= $hizmetSayisi ?></h3>
                <p>Hizmet</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-card">
                <h3><?= $uzmanSayisi ?></h3>
                <p>Uzman</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-card">
                <h3><?= $randevuSayisi ?></h3>
                <p>Toplam Randevu</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-card">
                <h3><?= $bekleyenRandevu ?></h3>
                <p>Bekleyen Randevu</p>
            </div>
        </div>
    </div>

    <div class="panel-box">
        <h4>Yapılabilecek İşlemler</h4>
        <p>Bu panelden hizmet, uzman ve randevu kayıtları yönetilebilir.</p>

        <a href="hizmetler.php" class="btn btn-primary me-2">Hizmetleri Yönet</a>
        <a href="uzmanlar.php" class="btn btn-success me-2">Uzmanları Yönet</a>
        <a href="randevular.php" class="btn btn-warning">Randevuları Gör</a>
    </div>

</div>

</body>
</html>