<?php

$user = "faizal";
$pass = "12";
$host = "localhost";
$port = 3306;
$dbname = "nonegram";

$connection = new mysqli($host,$user,$pass,$dbname);

if ($connection -> connect_errno) {
    echo "Error: " . $connection -> connect_error;
}