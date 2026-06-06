<?php
session_start();
include("../includes/db.php");

$hata = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $kullanici_adi = $_POST["kullanici_adi"] ?? "";
    $sifre = $_POST["sifre"] ?? "";

    if($kullanici_adi == "" || $sifre == ""){
        $hata = "Kullanıcı adı ve şifre boş bırakılamaz.";
    } else {
      $sql = "SELECT * FROM adminler WHERE kullanici_adi = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$kullanici_adi]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if($admin && password_verify($sifre, $admin["sifre"])){
    session_regenerate_id(true);

    $_SESSION["admin_id"] = $admin["id"];
    $_SESSION["admin_kullanici"] = $admin["kullanici_adi"];
    $_SESSION["admin_ad"] = $admin["ad_soyad"];

    header("Location: index.php");
    exit;
} else {
    $hata = "Kullanıcı adı veya şifre hatalı.";
}
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Giriş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e75480, #ff8fb3);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 420px;
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.20);
        }

        .login-card h2 {
            color: #c2185b;
            font-weight: 800;
            text-align: center;
            margin-bottom: 25px;
        }

        .btn-pink {
            background: #d63384;
            color: white;
            border: none;
            font-weight: 600;
        }

        .btn-pink:hover {
            background: #b42a6f;
            color: white;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Admin Girişi</h2>

    <?php if($hata): ?>
        <div class="alert alert-danger"><?= $hata ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Kullanıcı Adı</label>
            <input type="text" name="kullanici_adi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Şifre</label>
            <input type="password" name="sifre" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-pink w-100">Giriş Yap</button>
    </form>

    <div class="text-center mt-3">
        <a href="../index.php">Siteye Dön</a>
    </div>
</div>

</body>
</html>