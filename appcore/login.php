<?php

include_once "dbcon.php";

$username = $_POST['username'];
$password = $_POST['password'];
$query = $connection->query("SELECT * FROM user WHERE username = '$username'");
$last = mysqli_fetch_assoc($query);
$lastpass = $last['pass'];

if (password_verify($password, $lastpass)){
    header("Location:/nonegram/home.php");
} else {
    header("Location:/nonegram/");
}

