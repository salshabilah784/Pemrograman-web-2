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