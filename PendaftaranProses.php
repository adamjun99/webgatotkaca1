<?php
session_start();
include 'conf/koneksi.php'; 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];
$divisi = $_POST['divisi'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$akun_instagram = $_POST['akun_instagram'];
$tahun_daftar = 2002;
$generasi = 3;
$foto = "d";


$sql="INSERT INTO Pendaftaran (nama,nim,email,jenis_kelamin,program_studi,divisi,tanggal_lahir,
akun_instagram,tahun_daftar,generasi,foto) values ('$nama','$nim','$email','$jenis_kelamin','$program_studi',
'$divisi','$tanggal_lahir','$akun_instagram','$tahun_daftar','$generasi','$foto')";

$hasil = mysqli_query($koneksi, $sql);
if ($hasil) {
  header("location: main.php");
} else {
  echo "Terjadi kesalahan: " . mysqli_error($koneksi);
}
?>