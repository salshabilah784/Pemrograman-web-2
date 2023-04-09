<!-- isi content -->
<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- main content -->
<section class="content">
  <div class="container">
    <ul>
        <li>Kode Barang <?= $produk ['kode'] ?></li>
        <li>Nama Barang <?= $produk ['nama'] ?></li>
        <li>harga beli Barang <?= $produk ['harga_beli'] ?></li>
        <li>harga jual Barang <?= $produk ['harga_jual'] ?></li>
        <li>stok Barang <?= $produk ['stok'] ?></li>
        <li>minimal stok Barang <?= $produk ['min_stok'] ?></li>
        <li>jenis produk  <?= $produk ['prod'] ?></li>
    </ul>
  </div>
</section>
  <!-- /.content -->
</div>
<!-- /isi content -->

<!-- panggil file footer.php -->

<!-- /tutup file footer.php -->