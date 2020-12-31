<?php
header('Content-Type: application/json; charset=utf8');

include "../koneksi.php";

 //query tabel produk
$sql="SELECT * FROM surat_izin";
$query=mysqli_query($connect, $sql) or die(mysqli_error($connect));

$array=array();
while($data=mysqli_fetch_assoc($query)) $array[]=$data; 

 //mengubah data array menjadi format json
echo json_encode($array);
?>