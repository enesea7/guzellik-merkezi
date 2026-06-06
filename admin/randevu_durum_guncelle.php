<?php
include("kontrol.php");
include("../includes/db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"] ?? 0;
    $durum = $_POST["durum"] ?? "Bekliyor";

    $izinliDurumlar = ["Bekliyor", "Onaylandı", "İptal Edildi"];

    if($id && in_array($durum, $izinliDurumlar)){
        $sql = "UPDATE randevu_talepleri SET durum = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$durum, $id]);
    }
}

header("Location: randevular.php");
exit;
?>