<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Warung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left: 50px;">
                <img src="../assets/alliance.png" alt="Logo" width="25">
                Aldy Wijaya Gustian (19552011351)
            </a>

            <!-- Collapse Navbar-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card mt-4 w-50 mx-auto">
            <div class="card-header">
                <h3>Edit Data Warung</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <input type="hidden" name="id_barang" class="form-control" id="id_barang" value="">
                    <div class="form-group row p-2">
                        <label for="nama_barang" class="col-sm-4 col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="jumlah_barang" class="col-sm-4 col-form-label">Jumlah Barang</label>
                        <div class="col-sm-8">
                            <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" value="">
                        </div>
                    </div>
                    <div class="form-group row p-2">
                        <label for="harga_barang" class="col-sm-4 col-form-label">Harga Barang</label>
                        <div class="col-sm-8">
                            <input type="c" name="harga_barang" class="form-control" id="harga_barang" value="">
                        </div>
                    </div>
                    <div class="form-group row p-1">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="submit" name="tambah" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>