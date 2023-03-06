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
    <?php require_once "hasil_tugas.php"; ?>
                <tr class="text-center">
                    <th>Customer <td>:  <?= $nama; ?></td></th>
                    <br>
                    <th>Produk <td>:  <?= $produk; ?></td></th>
                    <br>
                    <th>Jumlah<td>:  <?= $jumlah; ?></td></th>
                    <br>
                    <th>Total Harga<td>:  <?= number_format($jumlah_harga);?></td></th>
                 </tr>
			</table>
		</div>
	 

</body>
</html>