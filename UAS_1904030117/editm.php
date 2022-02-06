<?php

require 'functions.php';

if (isset($_POST['edits'])) {
  if (edits($_POST) > 0) {
    echo "
  <script>
  alert('data berhasil di edit..!');
  document.location.href ='menup.php'
  </script>";
  } else {
    echo "
  <script>
  alert('data gagal di edit..!');
  </script>";
  }
}

$id = $_GET['id'];
$databer = query("SELECT * FROM data_member WHERE id = $id");
//var_dump($camaba['nama']);

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

        <input type="hidden" class="form-control" value="<?= $databer['id'] ?>" name="id">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Pelanggan</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $databer['nama'] ?>" placeholder="Nama Pelanggan" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $databer['alamat'] ?>" placeholder="Alamat" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="no_hp" class="form-label">No Handphone</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $databer['no_hp'] ?>" placeholder="No Handphone" required autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="foto_member" class="form-label">Foto Pelanggan</label>
          <input type="text" class="form-control" id="foto_member" name="foto_member" value="<?= $databer['foto_member'] ?>" placeholder="Foto Pelanggan" required autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="edits">Simpan</button>
        <br><br><br>
      </form>
    </div>
  </div>

  </div>
  </div>









  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>