<?php
$msg = "";
if (isset($_GET['username'])){
    $msg = ", Silahkan Login ".$_GET['username'];
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
        <header>
            <h2>Selamat Datang di Nonegram<?=$msg?></h2>
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
                <input id="login" type="submit" name="login" value="Login">
            </form>
            <button onclick="daftar()">Belum daftar?</button>
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
                <input id="register" type="submit" name="login" value="Daftar">
            </form>
            <button onclick="login()">Ingin login?</button>
        </div>
        <footer>
            Nonegram &copy 2019
        </footer>
    </div>
<script src="asset/style.js"></script>
</body>
</html>