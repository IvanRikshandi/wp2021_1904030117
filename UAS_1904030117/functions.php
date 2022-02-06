<?php
$conec = mysqli_connect('localhost', 'root', '', 'uas_1904030117');

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
  $stock = htmlspecialchars($data["stock"]);
  $foto_barang = htmlspecialchars($data["foto_barang"]);
  $harga_eceran = htmlspecialchars($data["harga_eceran"]);
  $harga_grosir = htmlspecialchars($data["harga_grosir"]);

  $query = "INSERT INTO data_barang
  VALUES (null,'$nama','$stock','$foto_barang','$harga_eceran','$harga_grosir')";

  mysqli_query($conec, $query);
  echo mysqli_error($conec);
  return mysqli_affected_rows($conec);
}

function submits($data)
{
  global $conec;

  // ambil data dari form

  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $no_hp = htmlspecialchars($data["no_hp"]);
  $foto_member = htmlspecialchars($data["foto_member"]);

  $query = "INSERT INTO data_member
  VALUES (null,'$nama','$alamat','$no_hp','$foto_member')";

  mysqli_query($conec, $query);
  echo mysqli_error($conec);
  return mysqli_affected_rows($conec);
}


function hapus($id)
{
  global $conec;
  mysqli_query($conec, "DELETE FROM data_barang WHERE id =$id") or die(mysqli_error($conec));
  mysqli_query($conec, "DELETE FROM data_member WHERE id =$id") or die(mysqli_error($conec));
  return mysqli_affected_rows($conec);
}

function edit($data)
{
  global $conec;

  // ambil data dari form
  // barang
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $stock = htmlspecialchars($data["stock"]);
  $foto_barang = htmlspecialchars($data["foto_barang"]);
  $harga_eceran = htmlspecialchars($data["harga_eceran"]);
  $harga_grosir = htmlspecialchars($data["harga_grosir"]);

  $query = "UPDATE data_barang SET 
  nama='$nama', 
  stock ='$stock', 
  foto_barang='$foto_barang', 
  harga_eceran='$harga_eceran', 
  harga_grosir='$harga_grosir' 
  WHERE id = '$id'";

  mysqli_query($conec, $query);

  echo mysqli_error($conec);
  return mysqli_affected_rows($conec);
}

function edits($data)
{
  global $conec;
  // Member

  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $no_hp = htmlspecialchars($data["no_hp"]);
  $foto_member = htmlspecialchars($data["foto_member"]);

  $query = "UPDATE data_member SET 
  nama='$nama', 
  alamat ='$alamat', 
  no_hp='$no_hp', 
  foto_member='$foto_member' 
  WHERE id = '$id'";

  mysqli_query($conec, $query);

  echo mysqli_error($conec);
  return mysqli_affected_rows($conec);
}

function cari($keyword)
{
  global $conec;

  $query = "SELECT * FROM data_barang WHERE nama LIKE'%" . $keyword . "%'";
  $query = "SELECT * FROM data_member WHERE nama LIKE'%" . $keyword . "%'";
  $result = mysqli_query($conec, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
