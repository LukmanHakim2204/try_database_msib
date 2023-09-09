<?php

$host = 'localhost';
$database_name = 'try_databaseman';
$database_username = 'root';
$database_password = '';

$mysqli = mysqli_connect($host, $database_username, $database_password, $database_name);

if ($mysqli->connect_error) {
    die("Koneksi Gagal: " . $mysqli->connect_error);
}
