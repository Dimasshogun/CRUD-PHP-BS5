<?php
include 'Koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {

        // var_dump($_FILES);
        // echo $_FILES['foto']['name'];
        // die();

        $nisn = $_POST['nisn']; //didalam variabel post yaitu "nisn" di ambil dari input name "kelola.php"
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $foto =  $_FILES['foto']['name'];
        $alamat = $_POST['alamat'];

        $dir = "img/";
        $tmpFile = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $foto);
        // die();

        $query =  "INSERT INTO tb_siswa VALUES(null, '$nisn' , '$nama' , '$jenis_kelamin' , '$foto' , '$alamat') ";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location:index.php"); //untuk masuk ke index
            // echo "Berhasil tambah Data <a href='index.php'>Home</a>";
        } else {
            echo $query;
        }
    } elseif ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index.php'>Home</a>";
    }
}

if (isset($_GET['hapus'])) {
    $id_siswa = $_GET['hapus']; //$id_siswa ini ambil dari variabel tomboll hapus di index.php 
    $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';"; // id_siswa ambil di id db

    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    // var_dump($result);
    unlink("img/" . $result['foto_siswa']); //untuk hapus di folder
    // echo $_FILES['foto']['name'];
    // die();

    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location:index.php"); //untuk masuk ke index
        // echo "Berhasil tambah Data <a href='index.php'>Home</a>";
    } else {
        echo $query;
    }
    // echo "Hapus Data <a href='index.php'>Home</a>";
}
