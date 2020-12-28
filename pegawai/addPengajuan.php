<?php 
// koneksi database
include '../koneksi.php';

// read profil
$query2 = mysqli_query($connect, "SELECT * FROM profil");
while($data = mysqli_fetch_array($query2)){ 
  $id_akun = $data['id_akun']; 
  $nama_lengkap = $data['nama_lengkap']; 
  $pangkat = $data['pangkat']; 
  $jabatan = $data['jabatan'];
}
// menangkap data yang di kirim dari form
$id_akun = $id_akun;
$nama_lengkap = $nama_lengkap;
$pangkat = $pangkat;
$jabatan = $jabatan;
$tanggal_awal = $_POST['tanggal_awal'];
$tanggal_akhir = $_POST['tanggal_akhir'];
$lama_izin = $_POST['lama_izin'];
$tipe_izin = $_POST['tipe_izin'];
$alasan = $_POST['alasan'];
$status = "Staff TU";

mysqli_query($connect, "INSERT INTO surat_izin VALUES ('','$id_akun','$nama_lengkap','$pangkat','$jabatan','$tanggal_awal','$tanggal_akhir','$lama_izin','$tipe_izin','$alasan','$status')");

// // mengalihkan halaman kembali ke pengajuan.php
header("location:pengajuan.php");

?>