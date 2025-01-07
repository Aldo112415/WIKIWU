<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'komik';
$tb_name = 'wiki';
$tb_name = 'anime';

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($mysqli->connect_errno) {
    die("Koneksi ke database gagal: " . $mysqli->connect_error);
}
?>
