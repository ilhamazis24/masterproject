<?php
setlocale(LC_ALL, 'id_ID');
$hariIni = new DateTime();
$tglNow = strftime('%d %B %Y', $hariIni->getTimestamp());
?>

<?php 
// koneksi database
include '../koneksi.php';

// read profil
$query2 = mysqli_query($connect, "SELECT * FROM profil");
while($data = mysqli_fetch_array($query2)){ 
	$nip_baru = $data['nip_baru']; 
	$nama_lengkap = $data['nama_lengkap']; 
	$gelar_belakang = $data['gelar_belakang']; 
	$gelar_depan = $data['gelar_depan'];
}
// menangkap data yang di kirim dari form
$nip_baru = $nip_baru;
$nama_lengkap = $nama_lengkap;
$gelar_depan = $gelar_depan;
$gelar_belakang = $gelar_belakang;
$tanggal_awal = $_POST['tanggal_awal'];
$tanggal_akhir = $_POST['tanggal_akhir'];
$lama_izin = $_POST['lama_izin'];
$tipe_izin = $_POST['tipe_izin'];
$alasan = $_POST['alasan'];
$status = "Staff TU";
$tgl = $tglNow;

mysqli_query($connect, "INSERT INTO surat_izin VALUES ('','$nip_baru','$nama_lengkap','$gelar_depan','$gelar_belakang','$tanggal_awal','$tanggal_akhir','$lama_izin','$tipe_izin','$alasan','$status','$tgl')");

// // mengalihkan halaman kembali ke pengajuan.php
header("location:pengajuan.php");

?>