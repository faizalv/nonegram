<?php
session_start();
include "dbcon.php";
$dir = "uploaded/imageprofile/";
$temp = $_FILES["profile"]["tmp_name"];
$imageFileType = strtolower(pathinfo($_FILES["profile"]["name"],PATHINFO_EXTENSION));
$newname = $dir.uniqid().".".$imageFileType;
move_uploaded_file($temp, "../".$newname);
$id = $_SESSION['logged-in'];
$stmt = $connection->query("update user set profile_path = '$newname' where id = '$id'");
echo '
<div>
    <a href="/nonegram">Back to Home</a>
</div>

';

$stmt->close();