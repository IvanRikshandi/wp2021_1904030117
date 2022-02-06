<?php
require 'functions.php';

if (!isset($_GET['id'])) {
  header("location: menub.php");
  exit;
}

$id = $_GET['id'];
$databar = query("SELECT * FROM data_barang WHERE id=$id");

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
  <div class="p-5 pt-5">
    <!-- konten -->
    <h3 class="text-center"> Detail Data Barang</h3>
    <hr>

    <ul class="list-group">
      <li class="list-group-item">Nama : <?= $databar['nama']; ?></li>
      <li class="list-group-item">Stock : <?= $databar['stock']; ?></li>
      <li class="list-group-item">Harga Eceran : <?= $databar['harga_eceran']; ?></li>
      <li class="list-group-item">Harga Grosir : <?= $databar['harga_grosir']; ?></li>
      <li class="list-group-item"><img src="assets/img/<?= $databar['foto_barang']; ?>" width="200px"></li>
      <li class="list-group-item">
        <a href="edit.php?id=<?= $databar['id']; ?>" class="btn btn-warning" role="button">Edit</a> |
        <a href="hapus.php?id=<?= $databar['id']; ?>" onclick="return confirm('Yakin menghapus data ini ?');" class="btn btn-danger" role="button">Hapus</a> |
        <a href="home.php" class="btn btn-primary" role="button">Kembali</a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>