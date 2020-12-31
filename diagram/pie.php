<?php

include "../koneksi.php";
// $labelCuti = mysqli_query($connect, "SELECT tipe_izin FROM surat_izin WHERE tipe_izin = 'Cuti' LIMIT 1");
$cuti = mysqli_query($connect,"SELECT COUNT('tipe_izin') AS tipe FROM surat_izin WHERE tipe_izin='Cuti'");
while($hasilCuti = mysqli_fetch_array($cuti)){
  $jumlahCuti = $hasilCuti['tipe'];
}

// echo $jumlahCuti;
$sakit = mysqli_query($connect,"SELECT COUNT('tipe_izin') AS tipeSakit FROM surat_izin WHERE tipe_izin='Sakit'");
while($hasilSakit = mysqli_fetch_array($sakit)){
  $jumlahSakit = $hasilSakit['tipeSakit'];
}

// echo $jumlahCuti;
$keluar = mysqli_query($connect,"SELECT COUNT('tipe_izin') AS tipeKeluar FROM surat_izin WHERE tipe_izin='keluar'");
while($hasilKeluar = mysqli_fetch_array($keluar)){
  $jumlahKeluar = $hasilKeluar['tipeKeluar'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="../js/charts-new.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col">
        <canvas id="piechart" style="padding-top : 20px;"></canvas>
      </div>
    </div>
  </div>

</body>
</html>

<script  type="text/javascript">
  var ctx = document.getElementById("piechart").getContext("2d");
  var data = {
    labels: [
    "Izin cuti",
    "Izin sakit",
    "Izin keluar"
    ],
    datasets: [
    {
      label: "Tipe Cuti",
      data: [
      <?php echo $jumlahCuti; ?>,
      <?php echo $jumlahSakit; ?>,
      <?php echo $jumlahKeluar; ?>
      ],
      backgroundColor: [
      '#dc3545',
      '#007bff',
      '#28a745'
      ]
    }
    ]
  };

  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
      responsive: true
    }
  });

</script>