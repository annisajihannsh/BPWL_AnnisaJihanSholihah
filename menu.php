<html xmlns="http://www.w3.org/1999/xhtml%22%3E">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>

    <head>
        <meta http-equiv=" Content-Type" content="text/html; charset=utf-8" />
        <title>Menu Produk</title>
    </head>

    <body>
        <div class="jumbotron jumbotron-fluid " color=pink-100>
            <div class="container text-center">
                <img src="outfit.jpg" width="200">
                <h1 class="display-4">LIST PRODUCT</h1>
                <p class="lead">Product In Your Clothes Store</p>
            </div>
        </div>
        <h1></h1>
        <?php include "koneksi.php"; ?>
        <div class="container">
            <a href="forminsert.php">Insert Product</a> <br>
            <br>
            <table border="5" class="table table-dark table-striped">
                <tr>
                    <th align="center">Id</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $i = 0;
                $query = mysqli_query($con, "SELECT * FROM 2055301011_produk");
                while ($m = mysqli_fetch_array($query)) {
                    $i++;
                ?>

                    <tr>
                        <td align="center"><?php print $i; ?></td>
                        <td><?php print $m['nama_2055301011']; ?></td>
                        <td><?php print $m['harga_2055301011']; ?></td>
                        <td><?php print $m['kategori_2055301011']; ?></td>
                        <td><?php print $m['deskripsi_2055301011']; ?></td>
                        <td><?php print $m['stok_2055301011']; ?></td>
                        <td><a href="formupdate.php?id=<?php print $m['id_2055301011'] ?>">Edit</a> |
                            <a href="hapus.php?id=<?php print $m['id_2055301011'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>

</html>
