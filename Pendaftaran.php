<?php
session_start();
include 'conf/koneksi.php'; //menghubungkan ke koneksi database

echo 'session<br>';
var_dump($_SESSION);


$nama = $_SESSION['username'];
$keranjang = $_SESSION['keranjang'];


$n = 20;
$kode_order = bin2hex(random_bytes($n));
$harga = $_POST['harga'];
$asuransi = $_POST['asuransi'];
$ongkos = $_POST['ongkos'];
$pengiriman = $ongkos == 50000 ? 'Instant' : 'Reguler';
$pembayaran = $_POST['pembayaran'];
$total = $harga + $asuransi + $ongkos;

if(!empty($harga) && !empty($asuransi) && !empty($ongkos) && !empty($pembayaran)){
  $q = "INSERT INTO daftar_order (kode_order, nama, alamat, pengiriman, pembayaran, total_harga, ongkos_kirim, asuransi, total_tagihan) 
  values ('$kode_order', '$nama','$alamat', '$pengiriman', '$pembayaran', '$harga', '$ongkos', '$asuransi', '$total')";  
  $simpan = mysqli_query($koneksi, $q);

  foreach ($keranjang as $id => $jumlah) {
    echo $id . ' ' . $jumlah . ' ';
    $q = "INSERT INTO detail_order (kode_order, id_produk, jumlah) values ('$kode_order', '$id','$jumlah')";
    $simpan = mysqli_query($koneksi, $q);
  }


  header('Location: checkout.php');
} 
else {
  echo '<script type="text/JavaScript"> 
  alert("Tidak dapat menyimpan, data belum lengkap!");
    </script>';
}
?>