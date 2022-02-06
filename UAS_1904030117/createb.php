<?php
require 'functions.php';
if (isset($_POST['submit'])) {
    # code...
    // var_dump($_POST);

    // cek data sudah di input /belum
    if (submit($_POST) > 0) {
        echo "
    <script>
    alert('data berhasil di input..!');
    document.location.href ='menub.php'
    </script>";
    } else {
        echo "
    <script>
    alert('data gagal di input..!');
    document.location.href ='createb.php'
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kartika Copy Center & ATK</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/createb.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">Kartika Copy Center & ATK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="menub.php">Aneka Barang</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="menup.php">Member</a></li>
                            <li><a class="dropdown-item" href="createp.php">Daftar Member</a></li>
                            <li><a class="dropdown-item" href="createb.php">Input Barang</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        <div class="mt-5">
            <h3>
                <div class="text-center"> Input Barang Kartika Copy Center & ATK</div>
            </h3>
            <hr>

            <form method="POST" action="">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Input Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock Barang" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="foto_barang" class="form-label">Foto Barang</label>
                    <input type="text" class="form-control" id="foto_barang" name="foto_barang" placeholder="Foto Barang" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="harga_eceran" class="form-label">Harga Eceran</label>
                    <input type="text" class="form-control" id="harga_eceran" name="harga_eceran" placeholder="Harga Eceran" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="harga_grosir" class="form-label">Harga Grosir</label>
                    <input type="text" class="form-control" id="harga_grosir" name="harga_grosir" placeholder="Harga Grosir" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Input</button>
                <br><br><br>
            </form>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>