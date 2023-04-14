<?php
include 'Fungsi.php';
session_start();

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {

        $berhasil = tambah_data($_POST, $_FILES);

        if ($berhasil) {
            $_SESSION['eksekusi'] = "Data Berhasil Di tambahkan";
            header("location:index.php"); //untuk masuk ke index
        } else {
            echo $berhasil;
        }
    } elseif ($_POST['aksi'] == "edit") {
        $berhasil = ubah_data($_POST, $_FILES);
        if ($berhasil) {
            $_SESSION['eksekusi'] = "Data Berhasil Di perbarui";
            header("location:index.php"); //untuk masuk ke index
        } else {
            echo $berhasil;
        }
    }
}

if (isset($_GET['hapus'])) {

    $berhasil = hapus_data($_GET);

    if ($berhasil) {
        $_SESSION['eksekusi'] = "Data Berhasil Di hapus";
        header("location:index.php"); //untuk masuk ke index
    } else {
        echo $berhasil;
    }
}
