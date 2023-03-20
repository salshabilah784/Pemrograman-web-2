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
            <h1 class="m-0">Praktikum 1</h1>
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
    <div class="col-sm-12">
    <?php
$ns1 = ['id'=> 1,'nim'=>'01101','uts'=>80,'uas'=>89,'tugas'=>78];
$ns2 = ['id'=> 2,'nim'=>'01102','uts'=>81,'uas'=>84,'tugas'=>79];
$ns3 = ['id'=> 3,'nim'=>'01103','uts'=>82,'uas'=>83,'tugas'=>77];
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<!-- buat table -->
<table border="1" width="100%">
<thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>TUGAS</th>
        <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai) {
        echo '<tr><td>' . $nomor. '</td>';
        echo '<td>' .$nilai['nim'].'</td>';
        echo '<td>' .$nilai['uts'].'</td>';
        echo '<td>' .$nilai['uas'].'</td>';
        echo '<td>' .$nilai['tugas'].'</td>';
        $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
        //menampilkan hasil dari nilai akhir
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
    
        $nomor++;
    }
    ?>
</table>
</div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- panggil file footer -->
<?php
include_once('footer.php');
?>
