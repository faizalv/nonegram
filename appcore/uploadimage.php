<?php
session_start();
include "dbcon.php";
$dir = "uploaded/image/";
$temp = $_FILES["image"]["tmp_name"];
$imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
$newname = $dir . uniqid() . "." . $imageFileType;
echo $_SESSION['logged-in'];
if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
    move_uploaded_file($temp, "../" . $newname);
    $image_id = uniqid();
    $user_id = $_SESSION['logged-in'];
    $stmt = $connection->query("insert into image values ('$image_id', '$newname', '$user_id')");
    echo "Berhasil upload gambar, Redirecting...";
    header("Refresh: 1; URL=/nonegram");
    $stmt->close();
}