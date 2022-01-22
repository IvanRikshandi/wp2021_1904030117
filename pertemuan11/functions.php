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

  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
  $agama = htmlspecialchars($data["agama"]);
  $sekolah_asal = htmlspecialchars($data["sekolah_asal"]);
  $foto_maba = htmlspecialchars($data["foto_maba"]);

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

function edit($data)
{
  global $conec;

  // ambil data dari form

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
  $agama = htmlspecialchars($data["agama"]);
  $sekolah_asal = htmlspecialchars($data["sekolah_asal"]);
  $foto_maba = htmlspecialchars($data["foto_maba"]);

  $query = "UPDATE calon_mhs SET 
  nama = '$nama',
  alamat = '$alamat',
  jenis_kelamin = '$jenis_kelamin',
  agama = '$agama',
  sekolah_asal = '$sekolah_asal',
  foto_maba = '$foto_maba'
  WHERE id = $id";

  mysqli_query($conec, $query);

  echo mysqli_error($conec);
  return mysqli_affected_rows($conec);
}

function cari($keyword)
{
  global $conec;

  $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conec, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
