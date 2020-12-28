<!doctype html>
<html class="no-js" lang="en">
<?php
include '../koneksi.php';
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
  }

  if($_SESSION['level']!="kepala_dinas")
  {
    die("<script>alert('Anda Bukan Kepala Dinas');document.location='../index.php'</script>");
  }
  ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kepala Dinas | Taman Nasional Laut Kepulauan Seribu</title>
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
                    <div class="dropdown">
                      <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
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
                    <span class="text">Kepala Dinas</span>
                  </a>
                </div>
                <div class="sidebar-content">
                  <div class="nav-container">
                    <nav id="main-menu-navigation" class="navigation-main">
                      <div class="nav-lavel"></div>
                      <div class="nav-item">
                        <a href="index.html"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                      </div>
                      <div class="nav-lavel"></div>
                      <div class="nav-item">
                        <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Data Profil</span></a>
                      </div>
                      <div class="nav-lavel"></div>
                      <div class="nav-item">
                        <a href=""><i class="ik ik-layers"></i><span>Data Pegawai</span></a>
                      </div>
                      <div class="nav-lavel"></div>
                      <div class="nav-item">
                        <a href="suratIzin.php"><i class="ik ik-box"></i><span>Data Surat Izin</span></a>
                      </div>
                      <div class="nav-lavel"></div>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="main-content">
                <div class="container-fluid">
                  <div class="row clearfix">
                    <h4>PENGAJUAN SURAT IZIN KARYAWAN</h4>
                    <br/>
                    <hr/>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead style=" background-color: #272d36;">
                          <tr style="text-transform: uppercase;">
                            <th scope="col">NO</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
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
                        $data = mysqli_query($connect, "SELECT * FROM surat_izin");
                        while($d = mysqli_fetch_array($data)){
                          ?>
                          <tbody>
                            <tr>
                              <th scope="row"><?= $no++; ?></th>
                              <td><?= $d['nama_lengkap']; ?></td>
                              <td><?= $d['id_akun']; ?></td>
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
                                <a href="aceptedIzin.php?id=<?= $d['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
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
