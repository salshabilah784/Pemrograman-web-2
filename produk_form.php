<?php
// buat object dari class jenis_produk dan produk
$obj_jenis_produk = new Jenis_produk();
$obj_produk = new Produk();

// panggil fungsi data produk & jenis produk yang ada di model
$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenisproduk();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<div class="container">
<form action="produk_controller.php" method="POST">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="harga_beli" name="harga_beli" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
    <div class="col-8">
      <input id="min_stok" name="min_stok" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
        <option selected> Pilih Jenis Produk </option>
        <?php
        foreach ($data_jenis_produk as $jenis) {
          ?>
          <option value="<?= $jenis ['id'] ?>"> <?= $jenis ['nama'] ?></option>
          <?php
        }
        ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>
</section>
<!-- /.content -->
</div>