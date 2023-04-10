<?php
include 'Koneksi.php';

$id_siswa = '';
$nisn = '';
$nama_siswa = '';
$jenis_kelamin = '';
$alamat = '';

if (isset($_GET['ubah'])) {
    $id_siswa = $_GET['ubah'];

    $query = "SELECT * FROM tb_siswa  WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    // var_dump($result);
    $nisn = $result['nisn'];
    $nama_siswa = $result['nama_siswa'];
    $jenis_kelamin = $result['jenis_kelamin'];
    $alamat = $result['alamat'];
}
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
    <nav class="navbar navbar-dark bg-dark mb-4">
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
    <div class="container">
        <!-- PAKAI method = POST -->
        <form action="Proses.php" method="POST" id="" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id_siswa; ?>" name="id_siswa">
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" name="nisn" id="nisn" placeholder="Contoh : 18090061" value="<?php echo $nisn; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" name="nama_siswa" id="nama" placeholder="Contoh : Dimas Shofa Gunarso" value="<?php echo $nama_siswa; ?>">
                </div>
            </div>
            <div class=" mb-3 row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select required name="jenis_kelamin" id="jk" class="form-select" aria-label="Default select example">
                        <option selected>Jenis Kelamin</option>
                        <option <?php if ($jenis_kelamin == 'Laki-laki') {
                                    echo "selected";
                                } ?> value="Laki-laki">Laki-laki</option>
                        <option <?php if ($jenis_kelamin == 'Perempuan') {
                                    echo "selected";
                                } ?> value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <!-- Form control > File input-->
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
                <div class="col-sm-10">
                    <input <?php if (!isset($_GET['ubah'])) {
                                echo "required";
                            } ?> class="form-control" type="file" name="foto" id="foto" accept="image/*" value="<?php echo $foto; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea required class="form-control" name="alamat" id="alamat" rows="3" placeholder="Contoh : Jalan Gurami Widuri Pemalang"><?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                    <!--  -->
                    <?php
                    // KETIKA TERDAPAT PERUBAHAN DENGAN METOD GET DENGAN VARIABEL UBAH(INDEX.PHP)
                    // maka menggunakan fitur edit data
                    if (isset($_GET['ubah'])) {
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan
                        </button>
                    <?php
                    } else {
                        // JIKA tdiak ada PERUBAHAN/INTERAKSI GET maka menggunakan fitur tambah data
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan
                        </button>
                    <?php
                    }
                    ?>
                    <a href="Index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i> Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>