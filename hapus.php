<?php

require "koneksi.php";

//tangkap id yang ingin di ubah 
$id = $_GET['id'];


$query = mysqli_query($con, "DELETE FROM 2055301011_produk WHERE id_2055301011 = $id");

echo "<h1> Data telah dihapus</h1>";

echo "Berhasil";
include "menu.php";
