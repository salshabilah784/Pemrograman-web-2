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
            <h1 class="m-0">Praktikum 3</h1>
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
    <title>Registrasi IT Club</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h4 style="text-align: center;">Form Registrasi IT Club</h4>
        <hr>
        <!-- code buka form -->
        <form method="POST" action="form_register.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Siswa</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                    <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
  <div class="form-group row">
            <label for="studi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="studi" name="studi" class="custom-select">
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="BD">Bisnis Digital</option>
                </select>
            </div>
        </div>
  <div class="form-group row">
    <label class="col-4">skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="skill[]_2" class="custom-control-label">JAVASCRIPT</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_3" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skill[]_4" class="custom-control-label">BOOTSTRAP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill[]_5" class="custom-control-label">PYTHON</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_6" class="custom-control-label">JAVA</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
            <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select">
                    <option value="jakarta">Jakarta</option>
                    <option value="Depok">Depok</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Tanggerang">Tanggerang</option>
                    <option value="Bekasi">Bekasi</option>
                </select>
            </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<!-- code tutup form -->
    </div>
</body>
</html>
<?php
//ambil data yang diinputkan user berdasarkan unique nama
//gunakan fungsi isset untuk memeriksa apakah suatu variabel sudah ataur atau belum
//fungsi isset mengembalikan nilai false jika ada variabel yang berisi nilai null

if(isset($_POST['submit'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $studi = $_POST['studi'];
  $skill = $_POST['skill'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];


  $nilai = 0;
  foreach ($skill as $value){
    switch ($value){
      case 'html':
        $nilai += 10;
        break;
      case 'css':
        $nilai += 10;
        break;
      case 'javascript':
        $nilai += 20;
        break;
      case 'bootstrap':
        $nilai += 20;
        break;
      case 'php':
        $nilai += 30;
        break;
      case 'python':
        $nilai += 30;
        break;
      case 'java':
        $nilai += 50;
        break;
      default :
      $nilai += 0;
      break;
    }
  }

}
// buat function predikat
// nilai di ambil dari banyaknya skill siswa
// dan jadikan parameter di dalam function
function predikat($_nilai)
{
  if ($_nilai >= 100 && $_nilai <= 170) { 
      return "Sangat Baik"; 
  } elseif ($_nilai > 60 && $_nilai < 100) {
      return "Baik";
  } elseif ($_nilai > 40 && $_nilai < 60) {
      return "Cukup";
  } elseif ($_nilai > 0 && $_nilai < 60) {
      return "Kurang";
  } else {
      return "Tidak Memadai";
  }
}
$predikat = predikat($nilai)
?>
<?php
//cetak hasil register
echo "<h4>hasil : </h4>";
echo "nama : $nama";
echo "<br/> NIM : $nim";
echo "<br/> jenis kelamin : $jk";
echo "<br/> program studi : $studi";
echo "<br/> skill :";
foreach ($skill as $value) {
  echo $value . " , ";
}
echo "<br/> skor nilai : $nilai";
echo "<br/> Tempat Domisili : $domisili";
echo "<br/> Email : $email";
echo "<br/> Keterangan nilai : $predikat";

?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- panggil file footer -->
<?php
include_once('footer.php');
?>
