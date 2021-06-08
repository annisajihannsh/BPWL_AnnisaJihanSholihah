<?php

require "koneksi.php";
$id_2055301011 = $_POST["id"];
$nama_2055301011 = $_POST['nama'];
$harga_2055301011 = $_POST['harga'];
$kategori_2055301011 = $_POST['kategori'];
$deskripsi_2055301011 = $_POST['deskripsi'];
$stok_2055301011 = $_POST['stok'];

$query = mysqli_query($con, "UPDATE 2055301011_produk SET nama_2055301011 = '$nama_2055301011',harga_2055301011 = '$harga_2055301011',
kategori_2055301011 = '$kategori_2055301011',deskripsi_2055301011 = '$deskripsi_2055301011' WHERE id_2055301011 = $id_2055301011");


include "menu.php";
