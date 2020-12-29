<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
}

if($_SESSION['level']!="admin")
{
  die("<script>alert('Anda Bukan Admin');document.location='../index.php'</script>");
}
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Data Profil | Taman Nasional Laut Kepulauan Seribu</title>
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

        <?php
              include "../koneksi.php";
              $id = $_SESSION['id'];
              $query="SELECT * FROM profil where id='$id'";
              $sql = mysqli_query ($connect,$query);
              $no = 1;
              while ($hasil = mysqli_fetch_array($sql)) {
                $nama_lengkap = $hasil ['nama_lengkap'];
                $nip_lama = $hasil['nip_lama'];
                $nip_baru = $hasil['nip_baru'];
                $nama_lengkap = $hasil ['nama_lengkap'];
                $gelar_depan = $hasil ['gelar_depan'];
                $gelar_belakang = $hasil ['gelar_belakang'];
                $jenis_kelamin = $hasil ['jenis_kelamin'];
                $golongan_darah = $hasil ['golongan_darah'];
                $agama = $hasil ['agama'];
                $perkawinan = $hasil ['perkawinan'];
                $hobi = $hasil ['hobi'];
                ?>
                
              <?php } ?>
        <div class="wrapper">
            <header class="header-top" header-theme="green">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                        <img src="../img/auth/login-bgtnlks.png" style="max-height: 35px">
                        <b><span >&nbsp;&nbsp;&nbsp;Taman Nasional Laut Kepulauan Seribu</span></b>
                         </div>
                        <div class="top-menu d-flex align-items-center">
                        <span><b><?php echo $gelar_depan; echo $nama_lengkap; echo $gelar_belakang; ?></span></b>
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
                <a class="header-brand" >
                            <span class="text">Administrator</span>
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
                                    <a href="data_profil.php"><i class="ik ik-menu"></i><span>Data Profil</span></a>
                                </div>
                                <div class="nav-lavel"></div>
                                <div class="nav-item">
                                    <a href="data_akun.php"><i class="ik ik-package"></i><span>Data Akun</span></a>
                                </div>
                                <div class="nav-lavel"></div>
                                <div class="nav-item">
                                    <a href=""><i class="ik ik-layers"></i><span>Data Pegawai</span></a>
                                </div>
                                <div class="nav-lavel"></div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Data Surat Izin</span></a>
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
                                        <i class="ik ik-edit bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tambah Data Akun</h5>
                                            <span>Menu Data Tambah Data Akun</span>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="tambah_data_akun.php">Data Akun</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tambah Data Akun</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Tambah Data Akun</h3></h3>
                                    </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                            <div class="row">
                                            <div class="col-sm-12">
                                            <div class="input-group input-group-success">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text">NIP Baru</label></span>
                                                    <input type="text" class="form-control" name="nip_baru" placeholder="Masukkan NIP Baru">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Nama Lengkap</span>
                                                    <input type="text" class="form-control" name="nama_lengkap_akun" placeholder="Masukkan Nama Lengkap">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                        <label for="exampleSelectGender">Jenis Kelamin</label>
                                                        <select class="form-control" name="jenis_kelamin">
                                                            <option value="Laki - Laki">Laki - Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-12">
                                            <div class="input-group input-group-success">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text">Username</label></span>
                                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Password</span>
                                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                        <label for="exampleSelectGender">Level Akun</label>
                                                        <select class="form-control" name="level">
                                                            <option value="admin">Admin</option>
                                                            <option value="kepala_dinas">Kepala Dinas</option>
                                                            <option value="staff_tu">Staff Tata Usaha</option>
                                                            <option value="pegawai">Pegawai</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        <input type="submit" class="btn btn-primary" name="TAMBAH_AKUN" id="TAMBAH_AKUN" value="+ Tambah Akun">
                                    </div>
                                </form>
                                </div>
                                    </div>



                                <div class="col-lg-4 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            <img src="../img/user.jpg" class="rounded-circle" width="150">
                                            <br><br>
                                            <h4 class="card-title mt-10"><?php echo $gelar_depan; echo $nama_lengkap; echo $gelar_belakang; ?></h4>
                                            <p class="card-subtitle">Admin</p>
                                        </div>
                                    
                                    <hr class="mb-0"> 
                                    <div class="card-body"> 
                                        <small class="text-muted d-block">Jenis Kelamin</small>
                                        <h6><?php echo $jenis_kelamin;?></h6> 
                                        <small class="text-muted d-block pt-10">Agama</small>
                                        <h6><?php echo $agama;?></h6> 
                                        <small class="text-muted d-block pt-10">Hobi</small>
                                        <h6><?php echo $hobi;?></h6>
                                </div>
                            </div>
                            </div>

                           
                            <?php

include "../koneksi.php";
    if (isset($_POST['TAMBAH_AKUN'])) {
    $nip_baru = $_POST ['nip_baru'];
    $nama_lengkap = $_POST ['nama_lengkap_akun'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $level = $_POST['level'];
    $query1  = mysqli_query($connect, "INSERT INTO akun VALUES ('','$nip_baru','$nama_lengkap','$jenis_kelamin','$username','$password','$level')");
    $query2  = mysqli_query($connect, "INSERT INTO profil (id,nip_baru,nama_lengkap,jenis_kelamin) VALUES ('','$nip_baru','$nama_lengkap','$jenis_kelamin')");

           if($query1){
              echo "<script>alert('Data Berhasil Ditambahkan');document.location='data_akun.php'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
            }else{
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              echo "<br><a href='data_akun.php'>Kembali Ke Form</a>";
            }
        

        if($query2){
            echo "<script>alert('Data Berhasil Ditambahkan');document.location='data_akun.php'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='data_akun.php'>Kembali Ke Form</a>";
          }
      }

?>




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
