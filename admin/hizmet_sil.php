<?php
include("kontrol.php");
include("../includes/db.php");

$id = $_GET["id"] ?? 0;

if($id){
    $sql = "DELETE FROM hizmetler WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
}

header("Location: hizmetler.php");
exit;
?>