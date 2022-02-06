<?php
require 'functions.php';
$databer = query("SELECT * FROM data_member");

if (isset($_GET['cari'])) {
  $databer = cari($_GET['keyword']);
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
      <h3 class="text-center">Aneka Barang</h3>
      <hr>

      <!-- Pencarian Data -->
      <form class="text-center" method="get">
        <input class="text-center" type="text" id="keyword" name="keyword" size="100" placeholder="Cari Barang" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari" role="button"> CARI</button>
      </form>

      <br>
      <hr>

      <table class="table table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama Member</th>
            <th scope="col">Foto</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>

        <?php if (empty($databer)) : ?>
          <tr>
            <td colspan="4" class="alert alert-danger text-center" role="alert">
              <p>Data barang tidak ditemukan!!!</p>
            </td>
          </tr>
        <?php endif; ?>

        <tbody>
          <?php $id = 1; ?>
          <?php foreach ($databer as $dtbe) : ?>
            <tr class="text-center">
              <th scope="row"><?php echo $id; ?></th>
              <td><?php echo $dtbe['nama']; ?></td>
              <td><img src="assets/img/<?php echo $dtbe['foto_member']; ?>" width="75px"></td>
              <td><a href="details.php?id=<?= $dtbe['id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
            </tr>
            <?php $id++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>