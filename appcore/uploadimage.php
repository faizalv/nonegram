<?php
session_start();
include "dbcon.php";
$dir = "uploaded/imageupload/";
$temp = $_FILES["foto"]["tmp_name"];
$imageFileType = strtolower(pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION));
$newname = $dir.uniqid().".".$imageFileType;
move_uploaded_file($temp, "../".$newname);
$stmt = $connection->query("update upload set foto = '$newname' where id = '$id'");
echo '
<div>
    <a href="/nonegram">Back to Home</a>
</div>

';

$stmt->close();