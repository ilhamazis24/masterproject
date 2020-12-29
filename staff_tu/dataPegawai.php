<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
}

if($_SESSION['level']!="staff_tu")
{
  die("<script>alert('Anda Bukan Admin');document.location='../index.php'</script>");
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Pegawai | Taman Nasional Laut Kepulauan Seribu</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/auth/login-bgtnlks.png" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/theme.min.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        include "../koneksi.php";
        $id = $_SESSION['id'];
        $query="SELECT * FROM akun where id='$id'";
        $sql = mysqli_query ($connect,$query);
        $data=mysqli_fetch_array($sql);
        $nama_lengkap = $data ['nama_lengkap'];
        $nip_baru = $data['nip_baru'];
        $level = $data['level'];
        ?>

        <div class="wrapper">
            <header class="header-top" header-theme="green">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <img src="../img/auth/login-bgtnlks.png" style="max-height: 35px">
                            <b><span >&nbsp;&nbsp;&nbsp;Taman Nasional Laut Kepulauan Seribu</span></b>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <span><b><?php echo $nama_lengkap; ?></b></span>
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
                            <span class="text">Staff Tata Usaha</span>
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
                                    <a href="DataPegawai.php"><i class="ik ik-layers"></i><span>Data Pegawai</span></a>
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
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-credit-card bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tabel Data Lengkap Pegawai</h5>
                                            <span>List Data Pegawai Sistem Informasi Taman Nasional Laut Kepulauan Seribu</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="data_pegawai.php">Data Pegawai</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page"><?= $level; ?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row-14">
                            <div class="col-md-14">
                                <div class="card">
                                    <div class="card-header d-block">
                                        <h3>Data Pegawai</h3><hr>
                                        <div class="card-search with-adv-search dropdown">
                                            <form action="">
                                                <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required="">
                                                <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIP Lama</th>
                                                        <th>NIP Baru</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Agama</th>
                                                        <th>Golongan Darah</th>
                                                        <th>Status</th>
                                                        <th>Hobi</th>
                                                        <th>Action</th>   
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    include '../koneksi.php';
                                                    $no = 1;
                                                    $data = mysqli_query($connect,"SELECT * from profil");
                                                    while($d = mysqli_fetch_array($data)){
                                                      ?>
                                                      <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $d['nip_lama']; ?></td>
                                                        <td><?php echo $d['nip_baru']; ?></td>
                                                        <td><?php echo $d['nama_lengkap']; ?></td>
                                                        <td><?php echo $d['jenis_kelamin']; ?></td>
                                                        <td><?php echo $d['agama']; ?></td>
                                                        <td><?php echo $d['golongan_darah']; ?></td>
                                                        <td><?php echo $d['perkawinan']; ?></td>
                                                        <td><?php echo $d['hobi']; ?></td>
                                                        <td>
                                                            <a href="edit_data_pegawai.php?id=<?php echo $d['id']; ?>" class="ik ik-edit f-16 mr-15 text-green"></a>
                                                            <a href="hapus_data_pegawai.php?id=<?php echo $d['id']; ?>" class="ik ik-trash-2 f-16 text-red"></a>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/tables.js"></script>
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
