<?php

include "koneksi.php";

$nama_2055301011 = $_POST['nama_2055301011'];
$harga_2055301011 = $_POST['harga_2055301011'];
$kategori_2055301011 = $_POST['kategori_2055301011'];
$deskripsi_2055301011 = $_POST['deskripsi_2055301011'];
$stok_2055301011 = $_POST['stok_2055301011'];

if (!empty($nama_2055301011) && !empty($harga_2055301011) && !empty($kategori_2055301011) && !empty($deskripsi_2055301011) && !empty($stok_2055301011)) {

    $u = mysqli_query($con, "INSERT INTO 2055301011_produk 
    VALUES
    ('' ,'$nama_2055301011','$harga_2055301011','$kategori_2055301011','$deskripsi_2055301011','$stok_2055301011')");

    include "menu.php";
};
