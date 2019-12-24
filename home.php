<?php
include "appcore/dbcon.php";
session_start();
if (isset($_SESSION['logged-in'])) {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location:/nonegram");
    } else {
        $id = $_SESSION['logged-in'];
        $stmt = $connection->query("Select * from user where id='$id'");
        $data = $stmt->fetch_assoc();
        echo $_SESSION['logged-in'];
    }
} else {
    header("Location:/nonegram/index.php?error=session");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nonegram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
<h1>Beranda</h1>
<div>
    <img style="width: 70px; border: 1px solid black; border-radius: 7px;" src="<?= $data['profile_path'] ?>" alt="">
    <span style="position: relative; top: -25px;"><?= $data['username'] ?></span>
</div>
<div>
    <a href="/nonegram/upload.php">New Post</a>
    <a href="/nonegram/profile.php">Update profile</a>
</div>
<form action="" method="post">
    <button type="submit" name="logout">Logout</button>
</form>
<br>
<br>

<?php
$datas = $connection->query("select image.id, image.path, user.username from image inner join user on image.user_id=user.id");
foreach ($datas as $d){
?>
<div style="border: 1px solid black; width: 300px; height: 300px; text-align: center; overflow-y: hidden">
    <span><?=$d['username']?> Memposting :</span>
    <img style="width: 100%;"src="<?=$d['path']?>" alt="">
</div>
    <br>
<?php } ?>

<script src=""></script>
</body>
</html>