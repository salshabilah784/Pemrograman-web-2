<?php
include_once 'dbkoneksi.php';

include_once 'models/Produk.php';
include_once 'models/Jenis_produk.php';
include_once 'model/Kartu.php';
include_once 'model/Pelanggan.php';
include_once 'model/Pembayaran.php';
include_once 'model/Pembelian.php';
include_once 'model/Pesanan.php';
include_once 'model/Vendor.php';

include_once('navbar.php');
include_once('sidebar.php');

// logic halaman
// tangkap request menu di url (index.php?hal=(nama file atau halaman nya))
$hal = $_REQUEST['hal'];
// jika ada request dari menu di url tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal.'.php';
}else{
    // jika tidak ada request dari menu di url tampilkan halaman home.php atau dashboard
    include_once 'home.php';
}
include_once('footer.php');
?>