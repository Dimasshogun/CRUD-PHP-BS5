<?php
include 'Koneksi.php';
function tambah_data($data, $files)
{
    $nisn = $data['nisn']; //didalam variabel post yaitu "nisn" di ambil dari input name "kelola.php"
    $nama_siswa = $data['nama_siswa'];
    $jenis_kelamin = $data['jenis_kelamin'];

    $split = explode('.', $files['foto']['name']);
    $ekstensi = $split[count($split) - 1];
    $foto =  $nisn . '.' . $ekstensi;

    $alamat = $data['alamat'];

    $dir = "img/";
    $tmpFile = $files['foto']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $foto);

    $query =  "INSERT INTO tb_siswa VALUES(null, '$nisn' , '$nama_siswa' , '$jenis_kelamin' , '$foto' , '$alamat') ";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function ubah_data($data, $files)
{
    $id_siswa = $data['id_siswa'];
    $nisn = $data['nisn'];
    $nama_siswa = $data['nama_siswa'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];

    $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);
    if ($files['foto']['name'] != "") {
        $split = explode('.', $files['foto']['name']);
        $ekstensi = $split[count($split) - 1];

        $foto = $result['nisn'] . '.' . $ekstensi; //ambil dari db
        unlink("img/" . $result['foto_siswa']);
        move_uploaded_file($files['foto']['tmp_name'], 'img/' . $foto);
    } else {
        $foto = $result['foto_siswa']; //ambil dari db
    }

    $query = " UPDATE tb_siswa SET nisn='$nisn', nama_siswa='$nama_siswa', jenis_kelamin ='$jenis_kelamin', alamat ='$alamat', foto_siswa ='$foto' WHERE id_siswa= '$id_siswa';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
function hapus_data($data)
{
    $id_siswa = $data['hapus']; //$id_siswa ini ambil dari variabel tomboll hapus di index.php 
    $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';"; // id_siswa ambil di id db

    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("img/" . $result['foto_siswa']); //untuk hapus di folder

    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
