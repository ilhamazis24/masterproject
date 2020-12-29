<?php
include "../koneksi.php";
if (isset($_GET['id'])) {
	$id=$_GET['id'];
} else {
	echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=databahasa'</script>";
}

$sql = "DELETE from surat_izin where id='$id'";
mysqli_query($connect, $sql);
echo "<script>alert('Pengajuan Surat Izin telah dihapus');document.location='pengajuan.php'</script>"
?>