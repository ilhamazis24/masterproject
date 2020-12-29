<!doctype html>
<html class="no-js" lang="en">
<?php
include '../koneksi.php';
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
  }

  if($_SESSION['level']!="pegawai")
  {
   die("<script>alert('Anda Bukan Pegawai');document.location='../index.php'</script>");
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
 $jenis_kelamin = $data['jenis_kelamin'];
 $username = $data['username'];
 $password = $data['password'];
 $level = $data['level'];
 ?>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Pegawai | Taman Nasional Laut Kepulauan Seribu</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="icon" href="../img/auth/login-bgtnlks.png" type="image/x-icon" />

   <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

   <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
   <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
   <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
   <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap.css">
   <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="../plugins/weather-icons/css/weather-icons.min.css">
   <link rel="stylesheet" href="../plugins/c3/c3.min.css">
   <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="../dist/css/theme.min.css">
   <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
 </head>

 <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

          <div class="wrapper">
           <header class="header-top" header-theme="light">
            <div class="container-fluid">
             <div class="d-flex justify-content-between">
              <div class="top-menu d-flex align-items-center">
               <img src="../img/auth/login-bgtnlks.png" style="max-height: 35px">
               <b><span >&nbsp;&nbsp;&nbsp;Taman Nasional Laut Kepulauan Seribu</span></b>
             </div>
             <div class="top-menu d-flex align-items-center">
              <span><b><?= $nama_lengkap; ?></b></span>
               <div class="dropdown">
                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                 <a class="dropdown-item"><?= $nama_lengkap; ?></a>
                 <a class="dropdown-item"><?= $nip_baru; ?></a>
                 <a class="dropdown-item" href="../logout.php"><i class="ik ik-power dropdown-icon"></i> Logout</a>
               </div>
             </div>

           </div>
         </div>
       </div>
     </header>

     <div class="page-wrap">
      <div class="app-sidebar colored">
       <div class="sidebar-header">
        <a class="header-brand">
         <span class="text">Pegawai</span>
       </a>
     </div>
     <div class="sidebar-content">
      <div class="nav-container">
        <nav id="main-menu-navigation" class="navigation-main">
          <div class="nav-lavel"></div>
          <div class="nav-item">
            <a href="index.php"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
          </div>
          <div class="nav-lavel"></div>
          <div class="nav-item">
            <a href="dataProfil.php"><i class="ik ik-menu"></i><span>Data Profil</span></a>
          </div>
          <div class="nav-lavel"></div>
          <div class="nav-item">
            <a href="dataPegawai.php"><i class="ik ik-layers"></i><span>Data Pegawai</span></a>
          </div>
          <div class="nav-lavel"></div>
          <div class="nav-item">
            <a href="pengajuan.php"><i class="ik ik-box"></i><span>Data Surat Izin</span></a>
          </div>
          <div class="nav-lavel"></div>
          <div class="nav-item">
            <a href="DataAkun.php"><i class="ik ik-box"></i><span>Data Account</span></a>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="main-content">
   <div class="container-fluid">
    <h4>PENGAJUAN SURAT IZIN</h4>
    <!-- Large modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Ajukan Surat Izin
    </button>
    <br/>
    <br/>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead style=" background-color: #272d36;">
          <tr style="text-transform: uppercase;">
            <th scope="col">NO</th>
            <th scope="col">Tipe Izin</th>
            <th scope="col">Lama Izin</th>
            <th scope="col">Tanggal Awal</th>
            <th scope="col">Tanggal Akhir</th>
            <th scope="col">Alasan Izin</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php 
        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM surat_izin where nip_baru= '$nip_baru'");
        while($d = mysqli_fetch_array($data)){
          ?>
          <tbody>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $d['tipe_izin']; ?></td>
              <td><?= $d['lama_izin']; ?></td>
              <td><?= $d['tanggal_awal']; ?></td>
              <td><?= $d['tanggal_akhir']; ?></td>
              <td>
                <details>
                  <summary>Details</summary>
                  <p><?= $d['alasan']; ?></p>
                </details>
              </td>
              <?php 
              $status1 = $d['status'];
              if ($status1 == "Staff TU") {
                echo "<td><p style='background-color: #fdb827; text-align:center; padding:2px; border-radius:20px; color:white;'>Staff TU</p></td>";
              }elseif($status1 == "Di Tolak"){
                echo "<td><p style='background-color: #ff4646; text-align:center; padding:2px; border-radius:20px; color:white;'>Di Tolak</p></td>";
              }elseif($status1 == "Disposisi"){
                echo "<td><p style='background-color: #21209c; text-align:center; padding:2px; border-radius:20px; color:white;'>Disposisi</p></td>";
              }else{
                echo "<td><p style='background-color: #61b15a; text-align:center; padding:2px; border-radius:20px; color:white;'>Di Terima</p></td>";
                ?>
              <?php } ?>
              <td>
                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                <a href="hapusPengajuan.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan menghapus data ini.?')"><i class="fa fa-trash"></i></a>
                <?php
                $id = $d['id'];
                if ($status1 == "Disposisi") {
                  echo "<a href='cetakSurat.php?id=$id' class='btn btn-dark btn-sm'><i class='fa fa-print'></i></a>";
                }elseif ($status1 == "Di Terima") {
                  echo "<a href='cetakSurat.php?id=$id' class='btn btn-dark btn-sm'><i class='fa fa-print'></i></a>";
                }else{
                  echo "tunggu";
                }
                ?>
              </td>
            </tr>
          </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
</div>
</div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #007bff; color: white;">
        <h5 class="modal-title" id="exampleModalLabel">Pengajuan Surat Izin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color: #1c2b2d; color: white;">
        <form action="addPengajuan.php" method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputState">Tipe Izin</label>
              <select id="inputState" class="form-control" name="tipe_izin" required="">
                <option selected>Cuti</option>
                <option value="sakit">Sakit</option>
                <option value="keluar">Keluar</option>
                <option value="cuti">Cuti</option>
              </select>
            </div>
            <div class="form-group col-md-8">
              <label for="izin">Lama Izin</label>
              <input type="text" name="lama_izin" class="form-control" id="izin" placeholder="3 hari / jam" required="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tanggal_awal">Tanggal Mulai</label>
              <input type="date" name="tanggal_awal" class="form-control" id="tanggal_awal" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="tanggal_akhir">Tanggal Akhir</label>
              <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alasan Izin</label>
            <textarea class="form-control" name="alasan" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="../plugins/screenfull/dist/screenfull.js"></script>
<script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
<script src="../plugins/moment/moment.js"></script>
<script src="../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../plugins/d3/dist/d3.min.js"></script>
<script src="../plugins/c3/c3.min.js"></script>
<script src="../js/tables.js"></script>
<script src="../js/widgets.js"></script>
<script src="../js/charts.js"></script>
<script src="../dist/js/theme.min.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
   function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='https://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
