<?php
require "koneksi.php";
//tangkap id yang ingin di ubah 
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT*FROM 2055301011_produk WHERE id_2055301011 = $id");
$m = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <form action="update.php" method="POST">
        <section class="testimonial py-5" id="testimonial">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 py-5  text-white text-center ">
                        <img src="o.jpg" style="width:100%">
                    </div>
                    <div class="col-md-8 py-5 border">
                        <a href="menu.php">
                            <h2 class="pb-4">MENU PRODUCT</h4>
                        </a>
                        <h4 class="pb-4">Please update with your details clothes</h4>
                        <form>
                            <div class="form-row">
                                <input type="hidden" value="<?php echo $m["id_2055301011"]; ?>" name="id" />
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Name</span>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $m['nama_2055301011']; ?>" width="100%" required />

                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Price</span>
                                    <input type="text" class="form-control" name="harga" value="<?php echo $m['harga_2055301011']; ?>" width="100%" required />

                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Category</span>
                                    <input type="text" class="form-control" name="kategori" value="<?php echo $m['kategori_2055301011']; ?>" width="100%" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Description</span>
                                    <input type="text" class="form-control" name="deskripsi" value="<?php echo $m['deskripsi_2055301011']; ?>" width="100%" required />

                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Stock</span>
                                    <input type="text" class="form-control" name="stok" value="<?php echo $m['stok_2055301011']; ?>" width="100%" required />
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="submit" name="submit" value="Update" class="btn btn-danger" />

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>