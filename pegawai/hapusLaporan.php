<?php
include "../koneksi.php";
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

$sql = "DELETE from laporan where id='$id'";
mysqli_query($connect, $sql);
echo "<script>alert('Laporan Berhasil Dihapus');document.location='laporan.php'</script>"
?>