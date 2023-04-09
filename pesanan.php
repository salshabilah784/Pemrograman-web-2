<?php
$model = new Pesanan();
$data_pesanan = $model->dataPesanan();
?>
<!-- Isi content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=pesanan">Home</a></li>
              <li class="breadcrumb-item active">Pesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>tanggal</th>
                            <th>total</th>
                            <th>pelanggan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no =1 ;
                        foreach($data_pesanan as $row){
                        ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['tanggal']?></td>
                                <td><?=$row['total']?></td>
                                <td><?=$row['pesan']?></td>
                            </tr>
                        <?php 
                        $no++;   
                        } 
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /Isi content -->
<?php
include_once('footer.php');
?>