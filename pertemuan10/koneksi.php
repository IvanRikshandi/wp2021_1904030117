<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'wpsmt5';

$conec = mysqli_connect($host, $user, $pass, $db); //CARA KONEKSI PHP KE MY SQL

//Kenapa di buat dengan "$" agar tidak terlalu panjang saat memanggil datanya, jadi pakai penampung


$result = mysqli_query($conec, 'SELECT * FROM calon_mhs'); // CARA MANGGIL QUERY DI SQL

//ambil data tabel calon mhs
//mysqli_fetch_row(); mengembalikan data dalam bentuk numerik
//mysqli_fetch_assoc(); mengembalikan data dalam bentuk nama field di rekomendasikan
//mysqli_fetch_array(); mengembalikan data dalam bentuk gabungan keduanya

//menggunakan while untuk perulangan banyak file
// while ($camaba = mysqli_fetch_row($result)){
//	var_dump($camaba);}

 ?>