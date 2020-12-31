<?php
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);
$tglNow = $date->format('d-F-Y H:i:s');
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

$  = $_FILES['laporan_file']['name'];
$tmp = $_FILES['laporan_file']['tmp_name'];

$path = "berkas/";

$upload = move_uploaded_file($tmp, $path . $nameFile);
if ($upload) {
	$nip_baru = $nip_baru;
	$nama_lengkap = $nama_lengkap;
	$judul = $_POST['judul'];
	$tgl_laporan = $tglNow;
	$status = "Verifikasi";
	mysqli_query($connect, "INSERT INTO laporan VALUES ('','$nip_baru','$nama_lengkap','$nameFile','$judul','$tgl_laporan','$status')");
	echo "<script>alert('Data berhasil');document.location='laporan.php'</script>";
} else {
	echo "Upload FIle gagal.";
}


?>