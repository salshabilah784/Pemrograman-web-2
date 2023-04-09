<?php
class Pesanan{
    private $koneksi;
    
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataPesanan(){
        $sql = "SELECT p.*,j.nama AS pesan
        FROM pesanan p
        INNER JOIN pelanggan j on j.id = p.pelanggan_id
        ORDER BY p.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>
