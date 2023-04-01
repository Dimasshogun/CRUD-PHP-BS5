<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tb_sekolah';
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn) {
    // echo"Berhasil konek";
}

mysqli_select_db($conn, $db);
