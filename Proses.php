<?php
include 'Koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        $nisn = $_POST['nisn']; //didalam variabel post yaitu "nisn" di ambil dari input name "kelola.php"
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $foto =  "gambar1.jpg";
        $alamat = $_POST['alamat'];

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
    $no = $_GET['hapus']; //$no ini ambil dari variabel tomboll hapus di index.php 
    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$no';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location:index.php"); //untuk masuk ke index
        // echo "Berhasil tambah Data <a href='index.php'>Home</a>";
    } else {
        echo $query;
    }
    // echo "Hapus Data <a href='index.php'>Home</a>";
}
