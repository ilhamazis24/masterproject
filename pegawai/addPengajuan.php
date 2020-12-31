<?php
setlocale(LC_ALL, 'id_ID');
$hariIni = new DateTime();
$tglNow = strftime('%d %B %Y', $hariIni->getTimestamp());
?>

<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
}

if($_SESSION['level']!="pegawai")
{
  die("<script>alert('Anda Bukan Admin');document.location='../index.php'</script>");
}
?>

 <?php
 include "../koneksi.php";
 $id = $_SESSION['id'];
 $query="SELECT * FROM akun where id='$id'";
 $sql = mysqli_query ($connect,$query);
 $data=mysqli_fetch_array($sql);
 $nama_lengkap = $data ['nama_lengkap'];
 $nip_baru = $data['nip_baru'];
 ?>

<?php 
// read profil
 $query2="SELECT * FROM profil where nip_baru='$nip_baru'";
 $sql = mysqli_query ($connect,$query2);
 $data2=mysqli_fetch_array($sql);
 $pangkat = $data2['pangkat'];
 $jabatan = $data2['jabatan'];
?>

<?php
$nip_baru = $nip_baru;
$nama_lengkap = $nama_lengkap;
$pangkat = $pangkat;
$jabatan = $jabatan;
$tanggal_awal = $_POST['tanggal_awal'];
$tanggal_akhir = $_POST['tanggal_akhir'];
$lama_izin = $_POST['lama_izin'];
$tipe_izin = $_POST['tipe_izin'];
$alasan = $_POST['alasan'];
$status = "Staff TU";
$tgl = $tglNow;

mysqli_query($connect, "INSERT INTO surat_izin VALUES ('','$nip_baru','$nama_lengkap','$pangkat','$jabatan','$tanggal_awal','$tanggal_akhir','$lama_izin','$tipe_izin','$alasan','$status','$tgl')");

// // mengalihkan halaman kembali ke pengajuan.php
header("location:pengajuan.php");

?>