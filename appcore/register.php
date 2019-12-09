<?php

//error_reporting(E_ALL);
//error_reporting(-1);
//ini_set('error_reporting', E_ALL);

include_once "dbcon.php";

if (isset($_POST['reg'])) {
    $id = uniqid();
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = $connection->prepare("INSERT INTO user (id, username, pass, profile_path) VALUES (?, ?, '$password', default)");
    $query->bind_param("ss", $id, $username);
    if ($query->execute()) {
        echo "<p>Berhasil mendaftar <br> Tunggu sebentar, anda akan diarahkan ke halaman login.<p>";
        header("Refresh: 2; URL=/nonegram/index.php?username=$username");
    } elseif ($query->errno == 1062) {
        echo "Username telah digunakan";
    } else {
        echo $query->error;
    }
}