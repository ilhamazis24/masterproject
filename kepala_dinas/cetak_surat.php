<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql = "SELECT * FROM surat_izin WHERE id ='$id'";
	$query=mysqli_query($connect, $sql);
	$data=mysqli_fetch_array($query);
	$id = $data['id'];
	$nama_lengkap = $data['nama_lengkap'];
	$nip_baru = $data['nip_baru'];
	$pangkat = $data['pangkat'];
	$jabatan = $data['jabatan'];
	$tanggal_awal = $data['tanggal_awal'];
	$tanggal_akhir = $data['tanggal_akhir'];
	$lama_izin = $data['lama_izin'];
	$tipe_izin = $data['tipe_izin'];
	$alasan = $data['alasan'];
	$tgl = $data['tgl'];
}
?>


<?php

function getImages($value)
{
	$path = $value;
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	return $base64;
}

$imgLeft = getImages('../image/image1.png');
$imgRight = getImages('../image/image2.png');
?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Surat Izin <?php echo $nama_lengkap; ?></title>
</head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@media print {
	html, body {
		size: auto;
		width: 297mm;
		height: 210mm;
	}
}

body{
	/*background-image: url('<?php echo $cover?>');*/
	background-size:   cover;                      /* <------ */
	background-repeat: no-repeat;
	background-position: center center;            /* optionally, center the image */
}

* {
	box-sizing: border-box;
}

table, th, td {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
}


/* Create two equal columns that floats next to each other */
.column {
	float: left;
	width: 75%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.column-2 {
	float: right;
	width: 25%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.column-isi {
	/*float: left;*/
	width: 100%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.header-left{
	/*background-color: grey;*/
	float: left;
	width: 15%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.header-right{
	/*background-color: red;*/
	float: right;
	width: 15%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.header {
	float: left;
	/*background-color: teal;*/
	text-align: center;
	width: 62%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	
}

.footer-2 {
	float: right;
	width: 40%;
	padding: 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;	
}
/* Clear floats after the columns */
.row:after {
	content: "";
	display: table;
	clear: both;
}
</style>

<body>

	<div class="row">
		<div class="header-left">
			<!-- <h1><?php echo $foto;?></h1> -->
			<img class="rounded float-left" style="border-radius: 100%; " src="<?php echo $imgLeft;  ?>" width="90" />
		</div>
		<div class="header-right">
			<img class="" style="border-radius: 100%; float: right;" src="<?php echo $imgRight;  ?>" width="90" />
		</div>
		<div class="header">
			<span style="text-align: center; font-size: 16px;">
				<b>DINAS LINGKUNGAN HIDUP DAN KEHUTANAN <br/>TAMAN NASIONAL KEPULAUAN SERIBU</b><br/>
			</span>
			<span>Alamat : Pulau Pramuka, Kel. Pulau Panggang, Kec. Kepulauan Seribu Utara, Kab. Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14530<br/>Website : www.simpulseribu.id</span>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="column-2">
			<p>Jakarta. <?= $tgl; ?></p>
		</div>
		<br/>
		<div class="column">
			<table>
				<tr>
					<td>Perihal</td>
					<td>:</td>
					<td><?= $tipe_izin; ?></td>
				</tr>
				<tr>
					<td>Lampiran</td>
					<td>:</td>
					<td>-</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="column-isi">
			<p>Kepada Yth. <br/> <b>Kepala Dinas Lingkungan Hidup dan Kehutanan <br/> Taman Nasional Kepulauan Seribu</b> <br/>Di-<br/>Tempat</p>
			<p>Dengan Hormat,</p>
			<p>Saya Yang Bertanda Tangan Dibawah Ini,</p>
			<div class="" style="padding-left: 20px;">
				<table>
					<tr>
						<td>NIP</td>
						<td>:</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?= $nama_lengkap; ?></td>
					</tr>
					<tr>
						<td>Pangkat/Gol</td>
						<td>:</td>
						<td><?= $pangkat; ?></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td>:</td>
						<td><?= $jabatan; ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="column-isi">
			<p style="text-align: justify;">Dengan ini saya mengajukan permintaan <?= $tipe_izin; ?> selama  <?= $lama_izin; ?> terhitung pada tanggal, <?= date('d F Y', strtotime($tanggal_awal)); ?> sampai dengan <?= date('d F Y', strtotime($tanggal_akhir)); ?>.</p>
			<p style="text-align: justify;">Demikian surat permohonan cuti tahunan ini saya ajukan. Atas perhatian dan diberikannya permohonan izin ini, saya ucapkan banyak terima kasih</p>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="footer-2">
			<p style="text-align: center;">Hormat Saya,</p>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<p style="text-align: center;">( <?= $nama_lengkap; ?>) <br/>NIP : <?= $nip_baru; ?></p>
		</div>
	</div>

</body>
</html>

<?php

$html = ob_get_clean(); 
use Dompdf\Dompdf;
require_once '../vendorPDF/vendor/autoload.php';
define("DOMPDF_UNICODE_ENABLED", true);
$dompdf = new Dompdf();
$dompdf->loadHtml($html); 
$dompdf->set_option('isRemoteEnabled', TRUE);
$dompdf->setPaper('A4', 'portrait'); 
$dompdf->render(); 
$dompdf->stream("suratIzin.pdf", array("Attachment" => false));

exit(0);

?>