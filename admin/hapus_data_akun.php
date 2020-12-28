<?php
include "../koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='data_akun.php'</script>";
}
$sql = "DELETE from akun where id='$id'";
mysqli_query($connect, $sql);
echo "<script>alert('Data telah dihapus');document.location='data_akun.php'</script>"
?>