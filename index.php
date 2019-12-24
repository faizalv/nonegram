<?php
session_start();
$reg = "";
$error = "";
if (isset($_GET['registered'])) {
    $reg = ", silahkan login " . $_GET['registered'];
}

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case "auth":
            $error = "Username atau password anda salah.";
            break;
        case "session":
            $error = "Anda harus login sebelum melanjutkan.";
            break;
    }
}

if (isset($_SESSION['logged-in'])) {
    header("Location:home.php");
    echo $_SESSION['logged-in'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nonegram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="asset/style.css">
</head>
<body>
<div class="main-section">
    <header style="color: #34495e; margin: 20px 0 10px 0;">
        <h2> Selamat Datang di Nonegram<?= $reg ?></h2>
        <br>
        <span style="color: red;"><?= $error ?></span>
    </header>
    <div id="login-box">
        <br>
        <h3>Login</h3>
        <form action="appcore/login.php" method="POST">
            <label for="user">Username</label>
            <input type="text" name="username" id="user" value="">
            <br>
            <br>
            <label for="pass">Password</label>
            <input type="password" name="password" id="pass">
            <br>
            <br>
            <input class="btn" type="submit" name="login" value="Login">
        </form>
        <button class="btn" onclick="daftar()">Belum daftar?</button>
    </div>
    <div id="reg-box" class="hide">
        <br>
        <h3>Daftar</h3>
        <form action="appcore/register.php" method="POST">
            <label for="user">Username</label>
            <input type="text" name="username" id="user">
            <br>
            <br>
            <label for="pass">Password</label>
            <input type="password" name="password" id="pass">
            <br>
            <br>
            <input class="btn" type="submit" name="reg" value="Daftar">
        </form>
        <button class="btn" onclick="login()">Ingin login?</button>
    </div>
    <footer>
        Nonegram &copy 2019
    </footer>
</div>
<script src="asset/style.js"></script>
</body>
</html>