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

    <!------ Include the above in your HEAD tag ---------->
    <form action="insert.php" method="POST">
        <section class="testimonial py-5" id="testimonial">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 py-5  text-white text-center ">
                        <img src="o.jpg" style="width:100%">
                    </div>
                    <div class="col-md-8 py-5 border">
                        <h4 class="pb-4">Please fill with your details clothes</h4>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Name</span>
                                    <input type="text" class="form-control" name="nama_2055301011" placeholder="Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Price</span>
                                    <input type="text" class="form-control" name="harga_2055301011" placeholder="Price" />
                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Category</span>
                                    <input type="text" class="form-control" name="kategori_2055301011" placeholder="Category" />
                                </div>

                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Description</span>
                                    <input type="text" class="form-control" name="deskripsi_2055301011" placeholder="Description" />
                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Product Stock</span>
                                    <input type="text" class="form-control" name="stok_2055301011" placeholder="Stock" />
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="submit" name="submit" value="Insert" class="btn btn-danger" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>