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
                                    <a href="data_pegawai.php"><i class="ik ik-layers"></i><span>Data Pegawai</span></a>
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
                                            <h5>Edit Data Diri Lengkap</h5>
                                            <span>Menu Edit Data Diri Pegawai Yang Akan Diupdate Datanya</span>
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
                                            <li class="breadcrumb-item"><a href="data_profil.php">Profile</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Data Diri Lengkap</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <?php
include "../koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  } else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=buku'</script>";
  }
$sql = "select * from profil where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nip_lama = $data ['nip_lama'];
$nip_baru = $data ['nip_baru'];
$bukti_berkas_nip = $data ['bukti_berkas_nip'];
$nama_lengkap = $data ['nama_lengkap'];
$gelar_depan = $data ['gelar_depan'];
$bukti_gelar_depan_1 = $data ['bukti_gelar_depan_1'];
$bukti_gelar_depan_2 = $data ['bukti_gelar_depan_2'];
$gelar_belakang = $data ['gelar_belakang'];
$bukti_gelar_belakang_1 = $data ['bukti_gelar_belakang_1'];
$bukti_gelar_belakang_2 = $data ['bukti_gelar_belakang_2'];
$bukti_gelar_belakang_3 = $data ['bukti_gelar_belakang_3'];
$jenis_kelamin = $data ['jenis_kelamin'];
$golongan_darah = $data ['golongan_darah'];
$agama = $data ['agama'];
$perkawinan = $data ['perkawinan'];
$hobi = $data ['hobi'];
?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>EDIT DARA DIRI LENGKAP</h3>
                                    </div>
                                    <div class="card-body">
                                    <form action="" method="post">
                                            <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-primary">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text">NIP Lama</label></span>
                                                    <input type="text" class="form-control" name="nip_lama" value="<?php echo $nip_lama; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="input-group input-group-success">
                                                    <span class="input-group-prepend">
                                                        <label class="input-group-text">NIP Baru</label></span>
                                                    <input type="text" class="form-control" name="nip_baru" value="<?php echo $nip_baru; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Bukti Berkas NIP Baru</span>
                                                    <input type="text" class="form-control" value="<?php echo $bukti_berkas_nip; ?>">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Nama Lengkap</span>
                                                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-primary">
                                                    <span class="input-group-prepend"><label class="input-group-text">Gelar Depan</span>
                                                    <input type="text" class="form-control" name="gelar_depan" value="<?php echo $gelar_depan; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-inverse">
                                                    <span class="input-group-prepend"><label class="input-group-text">Bukti Berkas Gelar Depan 1</span>
                                                    <input type="text" class="form-control" value="<?php echo $bukti_gelar_depan_1; ?>">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-inverse">
                                                    <span class="input-group-prepend"><label class="input-group-text">Bukti Berkas Gelar Depan 2</span>
                                                    <input type="text" class="form-control" value="<?php echo $bukti_gelar_depan_2; ?>">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-primary">
                                                    <span class="input-group-prepend"><label class="input-group-text">Gelar Belakang</span>
                                                    <input type="text" class="form-control" name="gelar_belakang" value="<?php echo $gelar_belakang; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-inverse">
                                                    <span class="input-group-prepend"><label class="input-group-text">Bukti Berkas Gelar Belakang 1</span>
                                                    <input type="text" class="form-control" value="<?php echo $bukti_gelar_belakang_1; ?>">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-inverse">
                                                    <span class="input-group-prepend"><label class="input-group-text">Bukti Berkas Gelar Belakang 2</span>
                                                    <input type="text" class="form-control" value="<?php echo $bukti_gelar_belakang_2; ?>">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-inverse">
                                                    <span class="input-group-prepend"><label class="input-group-text">Bukti Berkas Gelar Belakang 3</span>
                                                    <input type="text" class="form-control" value="<?php echo $bukti_gelar_belakang_3; ?>">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Jenis Kelamin</span>
                                                    <select class="form-control" name="jenis_kelamin">
                                                        <option value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option>
                                                            <option value="Laki - Laki">Laki - Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Agama</span>
                                                    <input type="text" class="form-control" name="agama" value="<?php echo $agama; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Golongan Darah</span>
                                                    <input type="text" class="form-control" name="golongan_darah" value="<?php echo $golongan_darah; ?>">
                                                </div>
                                            </div>  
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Status Perkawinan</span>
                                                    <input type="text" class="form-control" name="perkawinan" value="<?php echo $perkawinan; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-success">
                                                    <span class="input-group-prepend"><label class="input-group-text">Hobi</span>
                                                    <input type="text" class="form-control" name="hobi" value="<?php echo $hobi; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group input-group-inverse">
                                                    <span class="input-group-prepend"><label class="input-group-text">Berkas Photo</span>
                                                    <input type="text" class="form-control">&nbsp;&nbsp;
                                                    <button type="button" class="btn btn-warning btn-rounded">Cari File</button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="Update Profil">
                  </form>
                                        </div>
                                        <!-- Icon Group Addons end -->
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

        

<?php
    if (isset($_POST['EDIT'])) {
    $id = $data['id'];
    $nip_lama = $_POST['nip_lama'];
    $nip_baru = $_POST['nip_baru'];
    $nama_lengkap = $_POST ['nama_lengkap'];
    $gelar_depan = $_POST ['gelar_depan'];
    $gelar_belakang = $_POST ['gelar_belakang'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $golongan_darah = $_POST ['golongan_darah'];
    $agama = $_POST ['agama'];
    $perkawinan = $_POST ['perkawinan'];
    $hobi = $_POST ['hobi'];
        
          $query = "UPDATE profil SET nip_lama='$nip_lama', nip_baru='$nip_baru', nama_lengkap='$nama_lengkap', gelar_depan='$gelar_depan', gelar_belakang='$gelar_belakang', jenis_kelamin='$jenis_kelamin', golongan_darah='$golongan_darah', agama='$agama', perkawinan='$perkawinan', hobi='$hobi' where id='$id'";
          $sql = mysqli_query($connect, $query); 

           if($sql){
              echo "<script>alert('Data Berhasil Diedit');document.location='data_pegawai.php'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
            }else{
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              echo "<br><a href='index.php'>Kembali Ke Form</a>";
            }
        } ?>

    </body>
</html>
