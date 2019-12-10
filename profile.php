<?php
$msg = "";
if ($_GET['first'] == true) {
    $msg = "Atur foto profil anda sebelum melanjutkan";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/style.css">
    <title>Halaman Profil</title>
</head>
<body>
<div class="main-section">
    <header>
        <h2>Setting Foto Profile</h2>
        <span><?= $msg ?></span>
    </header>
    <form action="appcore/uploadprofile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile">
        <input type="submit" value="Simpan">
    </form>
</div>
</body>
</html>