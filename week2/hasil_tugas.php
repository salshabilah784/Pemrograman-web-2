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