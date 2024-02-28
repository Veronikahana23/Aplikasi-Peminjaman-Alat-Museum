<?php 
    session_start();
    if (empty($_SESSION['username'])) {
      header("location:index.php?pesan=belum_login");
    }
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Data Peminjaman</title>
  <link rel="icon" type="image/jpg" href="/1/img/logobssn.jpg">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>

<section class="bg-dark page-section">
<body style="max-width: 100%">
  <?php 
    echo $_SESSION['username'];
  ?>

  <header class="header">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home_admin.php"><img src="img/logo.png" width="250"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home_admin.php">Menunggu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="diterima.php">Diterima</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="ditolak.php">Ditolak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="dibatalkan.php">Dibatalkan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navigation -->
</header>
</section>
  <!-- body -->
  

<div class="row" style="max-height: ">
  <!-- content baru -->
    <!-- Start Container -->
      <div class="container-fluid bg-dark" style="border-radius: 0.25rem; padding: 0; max-width: 100%; overflow: auto; background-repeat: no-repeat; background-size: cover;">
        

        

        <!-- Start Content -->
        <div class="tab-content" id="v-pills-tabContent" style="width: 83%; height: 86.6vh; margin: 10px auto; overflow: auto; border: 1px solid black; background-color: white;" >
          <div class="font-italic" style="margin: 10px 15px;">
            <h5>Selamat Datang, <?=$_SESSION['nama']?>!</h5>
            <!-- jajal -->
             <div class="lg-col-6">
            <h1 class="text-center">Daftar Pinjaman</h1> <br>         
            <!-- start table -->
            <table class="table table-striped text-center" style="max-width: 100%;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Penanggung Jawab</th>
                  <th>Instansi</th>
                  <th>Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Ruang</th>
                  <th>Status</th>
                  <th colspan="4">Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php 


                  include 'koneksi.php';
                  $sesi = $_SESSION['id'];
                  
                  $query = "SELECT *, `peminjaman2`.`id` AS `pinjam`, `penanggungjawab`.`nama` AS 'Penanggungjawab', `ruang`.`nama` AS 'Ruang', `status`.`status` AS 'Status' FROM `peminjaman2` JOIN `penanggungjawab` ON `peminjaman2`.`id_penanggungjawab`=`penanggungjawab`.`id` JOIN `ruang` ON `peminjaman2`.`id_ruang`=`ruang`.`id` JOIN `status` ON `peminjaman2`.`id_status`=`status`.`id` WHERE `status`.`id` = '2'" ;
                 
                $sql = mysqli_query($conn,$query);
                echo mysqli_error($conn);
                if (mysqli_num_rows($sql) == 0) {
              ?>
                <tr>
                  <td class="text-center" colspan="8">Data Kosong</td>
                </tr>
                <tr>
                  <form action="form.php">
                    <td class="text-center" colspan="8"><button class="btn btn-primary" action="form.php">Isi Data</button></td>
                  </form>
                </tr>

              <?php
                }
                else {
                  $i = 1;
                  while ($data = mysqli_fetch_assoc($sql)) {
              ?>
                <tr>
                  <td class="align-middle"><?=$i?></td>
                  <td class="align-middle"><?=$data['Penanggungjawab']?></td>
                  <td class="align-middle"><?=$data['nama_instansi']?></td>
                  <td class="align-middle"><?=$data['nama_kegiatan']?></td>
                  <td class="align-middle"><?=$data['tanggal_kegiatan']?></td>
                  <td class="align-middle"><?=$data['Ruang']?></td>
                  <td class="align-middle"><?=$data['Status']?></td>
                  <td class="border-right-0 align-middle">
                    <form method="post" action="detail.php">
                      <input type="hidden" name="id-pinjam" value="<?=$data['pinjam']?>">
                      <input class="btn btn-primary" type="submit" name="Detail" value="Detail">
                      <!-- <a class="btn btn-primary" href="edit.php" role="button">Edit</a> -->
                    </form>
                  </td>
                  <td class="border-right-0 align-middle">
                    <form method="post" action="pertimbangkan.php">
                      <input type="hidden" name="id-pinjam" value="<?=$data['pinjam']?>">
                      <input class="btn btn-warning" type="submit" name="Pertimbangkan_Ulang" value="Pertimbangkan Ulang">
                    </form>
                  </td>
                </tr>
                
              <?php
                    $i++;
                  }
                  ?>
                  
                  <?php
                }
              ?>
            </tbody>
            </table>
            <!-- end table -->
          </div>
            <!-- end jajal -->


          </div>
        </div>
        <!-- End Content -->
        
        <!-- Start Footer -->
        <div class="card bg-dark" style="clear: both;">
          <div class="card-header text-light" style="padding: 1.2vh;">
            Copyright&copy; 
          </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
  <!-- end content baru -->
</div>
  <!-- end body -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright"></span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/museum.sandi/">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="facebook.com/museumsandi">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="twitter.com/museumsandiina">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
