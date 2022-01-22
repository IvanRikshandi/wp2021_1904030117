<?php
$conec = mysqli_connect('localhost', 'root', '', 'wpsmt5');

// pemanggilan tabel
function query($query)
{
  global $conec;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conec, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan element data dengan rapih 
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function submit($data)
{
  global $conec;

  // ambil data dari form

  $nama = htmlspecialchars($_POST["nama"]);
  $alamat = htmlspecialchars($_POST["alamat"]);
  $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
  $agama = htmlspecialchars($_POST["agama"]);
  $sekolah_asal = htmlspecialchars($_POST["sekolah_asal"]);
  $foto_maba = htmlspecialchars($_POST["foto_maba"]);

  $query = "INSERT INTO calon_mhs
  VALUES (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba')";

  mysqli_query($conec, $query);
  echo mysqli_error($conec);
  return mysqli_affected_rows($conec);
}

function hapus($id)
{
  global $conec;
  mysqli_query($conec, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($conec));
  return mysqli_affected_rows($conec);
}
