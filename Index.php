<?php
// include'/namafolder/Koneksi.php';
include 'Koneksi.php';

$query = "SELECT * FROM tb_siswa;";
$sql = mysqli_query($conn, $query);
$no = 0;

// var_dump($sql);
// varibel untuk data mysqli_query
// $result = mysqli_fetch_row($sql);
// var_dump($result);

// cuma buat ngecek
// while ($result = mysqli_fetch_assoc($sql)) {
//     echo $result['nama_siswa']."<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar CRUD</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Judul -->
    <div class="container-fluid">
        <h1>Data Siswa </h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data yang telah di simpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                SMA Negeri 01 Pemalang <cite title="Source Title"> (Jawa Tengah)</cite>
            </figcaption>
        </figure>
        <a href="Kelola.php" type="button" class="btn btn-primary  mb-3">
            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
        </a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($result = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <th scope="row">
                                <?php echo ++$no ?>
                            </th>
                            <td>
                                <?php echo $result['nisn']; ?>
                            </td>
                            <td><?php echo $result['nama_siswa']; ?></td>
                            <td><?php echo $result['jenis_kelamin']; ?></td>
                            <td>
                                <img src="img/<?php echo $result['foto_siswa']; ?>" style="width: 150px;">
                            </td>
                            <td><?php echo $result['alamat']; ?></td>
                            <td>
                                <a href="Kelola.php?ubah=<?php echo $no ?> " type="button" class="btn btn-success btn-sm ">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a href="Proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm " onClick="return confirm('Apakah anda yakin untuk mengjapus data tersebut???')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>