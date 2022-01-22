<?php
date_default_timezone_get("Asia/Jakarta");

include 'koneksi.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

    <title>CRUD</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            </ul>
            <div class="text-white">
              <?php echo date('l, d-m-y'); ?>
            </div>
          </div>
        </div>
      </nav>

      <!-- Sidebar -->
      
      <div class="row mt-4">
        <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
          <!-- menu -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a><hr class="bg-dark">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> Calon Mahasiswa</a>
            </li><hr class="bg-dark">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fas fa-user-edit"></i> Input CAMABA</a>
            </li><hr class="bg-dark">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
            </li><hr class="bg-dark">
            <li class="nav-item">
              <a class="nav-link text-white" href="#"><i class="far fa-calendar-alt"></i> Jadwal Kuliah</a>
            </li><hr class="bg-dark">
          </ul>
        </div>

        <div class="col-md-10 p-5 pt-5">
          <!-- konten -->
          <h3><i class="fas fa-user"></i> Daftar Calon Mahasiswa</h3><hr>

          <table class="table table-striped">
              <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Sekolah Asal</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php  $no=1; ?>
                <?php while ($camaba = mysqli_fetch_assoc($result)){ ?>
                    <tr class="text-center">
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $camaba['nama']; ?></td>
                        <td><?php echo $camaba['alamat']; ?></td>
                        <td><?php echo $camaba['jenis_kelamin']; ?></td>
                        <td><?php echo $camaba['agama']; ?></td>
                        <td><?php echo $camaba['sekolah_asal']; ?></td>
                  <td><img src="image/foto1.jpg" width="75px"></td>
                  <td><i class="far fa-edit"></i>||<i class="fas fa-trash"></i></td>
                </tr>
                <?php $no++ ?>
                <?php } ?>
              </tbody>
            </table>
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