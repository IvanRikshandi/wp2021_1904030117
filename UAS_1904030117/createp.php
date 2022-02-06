<?php
require 'functions.php';
if (isset($_POST['submits'])) {
  # code...
  // var_dump($_POST);

  // cek data sudah di input /belum
  if (submits($_POST) > 0) {
    echo "
    <script>
    alert('data berhasil di input..!');
    document.location.href ='menup.php'
    </script>";
  } else {
    echo "
    <script>
    alert('data gagal di input..!');
    document.location.href ='createp.php'
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
          <label for="nama" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="no_hp" class="form-label">No Handphone</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="foto_member" class="form-label">Foto Pelanggan</label>
          <input type="text" class="form-control" id="foto_member" name="foto_member" placeholder="Foto Member" required autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="submits">Input</button>
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