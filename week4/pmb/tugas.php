<!-- panggil file navbar -->
<!-- panggil file sidebar -->
<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- isi content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas SALSHA BILAH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div style="margin-top: 30px;">
    <h2>Belanja Online</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form  method="POST" action="tugas.php">
                    <div class="form-group row">
                      <label for="name" class="col-4 col-form-label">Costumer</label> 
                      <div class="col-8">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fa fa-address-card"></i>
                            </div>
                          </div> 
                          <input id="name" name="name" placeholder="Nama Costumer" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Pilih Produk</label> 
                      <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                          <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                          <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                          <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                      <div class="col-8">
                        <input type="number" name="jumlah" class="form-control" required="required">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
            <div class="col-md-3">
            <table class="table">
                    <thead>
                        <tr class="card-header text-uppercase bg-primary text-light text-center">
                            <th>
                                Daftar Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-warning">
                            <td>
                                TV : 4.200.000
                            </td>
                           </tr>
                        <tr class="table-active">
                            <td>
                                Kulkas : 3.100.000
                            </td>
                           </tr>
                        <tr class="table-success">
                            <td>
                                Mesin Cuci : 3.800.000
                            </td>
                            </tr>
                        <tr class="card-header text-uppercase bg-primary text-light text-center">
                            <td>
                                Harga dapat Berubah Setiap Saat
                            </td>
                           </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
$nama = $_POST['name'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($produk == "tv"){
    $jumlah_harga = 4200000 * $jumlah;
} elseif($produk == "kulkas"){
    $jumlah_harga = 3100000 * $jumlah;
} elseif($produk == "mesin_cuci"){
    $jumlah_harga = 3800000 * $jumlah;
}else{

}
?>
<div style="margin-left: 20%;">

<?php

echo "<h4>Hasil : </h4>";
echo "<br>Customer: $nama";
echo "<br/>Produk : $produk";
echo "<br/>Jumlah : $jumlah"; echo "<br/>Total Harga: ". number_format($jumlah_harga);
?>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- panggil file footer -->
<?php
include_once('footer.php');
?>
</body>
</html>