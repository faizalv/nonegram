<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

include_once "dbcon.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = $connection->prepare("SELECT id, pass, profile_path FROM user WHERE username = ?");
$query->bind_param('s', $username);
$query->execute();
$query->bind_result($id, $dbpass, $profile_path);

while ($query->fetch()) {
    if (password_verify($password, $dbpass)) {
        $_SESSION['logged-in'] = $id;
        if ($profile_path!=null) {
            header("Location:../home.php");
        } else {
            header("Location:../profile.php?first=true");
        }
    } else {
        header("Location:/nonegram/index.php?error=auth");
    }
}
$query->close();
