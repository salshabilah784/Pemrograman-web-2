<?php
require_once 'akmal2.php';
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$_nilai = $uts + $uas + $tugas / 3;
$hasil_ujian = kelulusan($_nilai);
$grade = grade($_nilai);

if(!empty($proses)) {
echo "Nama : $nama_siswa";
echo "<br/> mata kuliah : $mata_kuliah";
echo "<br/> nilai UTS : $uts";
echo "<br/> nilai UAS : $uas";
echo "<br/> nilai tugas praktikum : $tugas";
echo "<br/> Grade : $grade";
echo "<br/> keterangan : $hasil_ujian";
echo "<br/> data telah diproses $proses";
}
?>