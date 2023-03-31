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
        <form action="Proses.php" method="POST" id="">
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" placeholder="Contoh : 18090061">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Contoh : Dimas Shofa Gunarso">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select id="jk" class="form-select" aria-label="Default select example">
                        <option selected>Jenis Kelamin</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
            <!-- Form control > File input-->
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="foto">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Contoh : Jalan Gurami Widuri Pemalang"></textarea>
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
                        // JIKA tdiak ada PERUBAHAN/INTERAKSI maka menggunakan fitur tambah data
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