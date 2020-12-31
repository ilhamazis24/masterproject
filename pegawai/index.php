<!doctype html>
<html class="no-js" lang="en">
<?php
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
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <p class="dropdown-item"><?= $nama_lengkap; ?></p>
                                    <p class="dropdown-item"><?= $nip_baru; ?></p>
                                    <a class="dropdown-item" href="../logout.php"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <?php
            $dataTotal = mysqli_query($connect,"SELECT * FROM profil");
            $total = mysqli_num_rows($dataTotal); ?>
            ?>

            <?php
            $cuti = mysqli_query($connect,"SELECT COUNT('tipe_izin') AS tipe FROM surat_izin WHERE tipe_izin='Cuti'");
            while($hasilCuti = mysqli_fetch_array($cuti)){
                $jumlahCuti = $hasilCuti['tipe'];
                $totalCuti = round($jumlahCuti/$total * 100,1);
            }

            $sakit = mysqli_query($connect,"SELECT COUNT('tipe_izin') AS tipe FROM surat_izin WHERE tipe_izin='Sakit'");
            while($hasilSakit = mysqli_fetch_array($sakit)){
                $jumlahSakit = $hasilSakit['tipe'];
                $totalSakit = round($jumlahSakit/$total * 100,1);
            }

            $keluar = mysqli_query($connect,"SELECT COUNT('tipe_izin') AS tipe FROM surat_izin WHERE tipe_izin='Keluar'");
            while($hasilKeluar = mysqli_fetch_array($keluar)){
                $jumlahKeluar = $hasilKeluar['tipe'];
                $totalKeluar = round($jumlahKeluar/$total * 100,1);

            } ?>

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
                                <div class="nav-lavel"></div>
                                <div class="nav-item">
                                    <a href="laporan.php"><i class="ik ik-box"></i><span>Laporan</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-menu bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Reporting Data Pegawai Taman Nasional Laut Kepulauan Seribu</h5>
                                            <span>Total Pegawai <b><?php echo $total; ?></b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p style="color: red;">Rumus Persen = Total Pegawai / tipe Izin * 100</p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Round Chart statustc card start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-red st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-1" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5><?= $totalCuti; ?>%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class=" fw-700 mb-5"><?= $jumlahCuti; ?></h3>
                                                <h6 class="mb-0 ">Cuti</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl"><?= $totalCuti; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-blue st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-2" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5><?= $totalSakit; ?>%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class="fw-700 mb-5"><?= $jumlahSakit; ?></h3>
                                                <h6 class="mb-0">Sakit</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl"><?= $totalSakit; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-green st-cir-card text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div id="status-round-3" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                                    <h5><?= $totalKeluar ?>%</h5>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <h3 class="fw-700 mb-5"><?= $jumlahKeluar; ?></h3>
                                                <h6 class="mb-0">Keluar</h6>
                                            </div>
                                        </div>
                                        <span class="st-bt-lbl"><?= $totalKeluar; ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Round Chart statustc card end -->

                            <!-- product bar chart start -->


                            <div class="col-xl-6 col-md-6">
                                <div class="card prod-bar-card">
                                    <div class="card-header">
                                        <h3>Diagram Data Pegawai</h3>
                                    </div>
                                    <div class="card-block">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Tipe Izin</th>
                                                    <th>Jumlah Izin</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card prod-bar-card">
                                    <div class="card-header">
                                        <h3>Chart Izin Pegawai</h3>
                                    </div>
                                    <div class="card-block">
                                        <div class="text-center">
                                            <iframe src="../diagram/pie.php" width="100%" height="300" style="border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product bar chart end -->
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
