<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

session_start();
include "dbcon.php";
$id = $_SESSION['logged-in'];
$dir = "uploaded/imageprofile/";
$temp = $_FILES["profile"]["tmp_name"];
$imageFileType = strtolower(pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION));
$newname = $dir . uniqid() . "." . $imageFileType;

if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png") {
    $lastprofile = $connection->query("select profile_path from user where id = '$id'");

    foreach ($lastprofile as $d){
        if ($d['profile_path'] != null) {
            unlink($_SERVER['DOCUMENT_ROOT']."/nonegram/".$d['profile_path']);
            echo $d['profile_path'];
        }
    }
    move_uploaded_file($temp, "../" . $newname);
    $stmt = $connection->query("update user set profile_path = '$newname' where id = '$id'");
    header("Location:/nonegram");
    $stmt->close();
} else {
    echo '
    <div>
        <span>File yang anda upload bukan sebuah gambar!</span>
        <a href="/nonegram/profile.php">Kembali</a>
    </div>
    ';
}