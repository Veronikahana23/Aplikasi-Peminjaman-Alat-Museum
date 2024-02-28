<?php 
  include 'koneksi.php';
  include 'cek_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Data Ruang dan Kegiatan</title>
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
<body style="max-width: 100%;">
  <header class="header">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home.php"><img src="img/logo.png" width="250"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Aturan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Aula</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Ruang Komunitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Login</a>
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
        

        <!-- Start Sidebar -->
       <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 15%; height: 100%; margin: 0 auto; overflow: auto; float: left;">
          <a class="nav-link btn-secondary text-center" href="penanggungjawab.php" role="tab" aria-controls="v-pills-olah-data-guru" aria-selected="false">Data Penanggung Jawab</a>
          <a class="nav-link btn-secondary text-center" href="datainstansi.php" role="tab" aria-controls="v-pills-olah-data-guru" aria-selected="false">Data Instansi</a>
          <a class="nav-link btn-secondary text-center" href="ruang.php" role="tab" aria-controls="v-pills-olah-data-user" aria-selected="false">Ruang dan Kegiatan</a>
          <a class="nav-link btn-secondary text-center" href="Konfirmasi.php" role="tab" aria-controls="v-pills-olah-data-mapel" aria-selected="false">Konfirmasi Data</a>
          <a class="nav-link btn-secondary text-center" href="status.php" role="tab" aria-controls="v-pills-olah-data-mapel" aria-selected="false">Status</a>
          <a class="nav-link btn-secondary text-center" href="logout.php" role="button" data-toggle="modal" data-target="#logoutModal">Logout</a>

          <!-- Start Logout Modal -->
          <div class="modal fade text-dark" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-left">Anda yakin ingin logout?</div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Logout Modal -->
        </div>
        <!-- End Sidebar -->

        <!-- Start Content -->
        <div class="tab-content" id="v-pills-tabContent" style="width: 83%; height: 86.6vh; margin: 10px auto; overflow: auto; border: 1px solid black; background-color: white;" >
          <div class="font-italic" style="margin: 10px 15px;">
          <h5>Selamat Datang, <?=$_SESSION['nama']?>!</h5>
        </div>
          <br>
        <br>
        
        <h4 class="text-center text-uppercase">Data Ruang dan Kegiatan</h4>
        &nbsp&nbsp&nbsp

        <div class="container">
          <form method="post" action="cek_dataruang.php">
            <div class="input-group mb-3">
                <input class="form-control form-control" id="kegiatan-nama" type="text" name="kegiatan-nama" placeholder="Masukkan Nama Kegiatan">
            </div>
            <div class="input-group mb-3">
                <input class="form-control form-control" id="kegiatan-tanggal" type="date" name="kegiatan-tanggal" placeholder="Masukkan Tanggal Kegiatan">
            </div>

            <label>Jam Mulai   : </label>   
            <div class="input-group mb-3"> 
                <input class="form-control form-control" id="kegiatan-jam-mulai" type="time" name="kegiatan-jam-mulai" placeholder="Masukkan Jam mulai">
             </div>
             <label>Jam Selesai : </label>
             <div class="input-group mb-3">
                <input class="form-control form-control" id="kegiatan-jam-selesai" type="time" name="kegiatan-jam-selesai" placeholder="Masukkan jam selesai">
              </div>
              <label>Pilih Ruang   : </label> <br>  
              <div class="form-check-inline">
                <label class="form-check-label input-group mb-3">
                    <input type="radio" class="form-check-input" name="kegiatan-ruang" value="2">Aula
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label input-group mb-3">
                    <input type="radio" class="form-check-input" name="kegiatan-ruang" value="1">Ruang Komunitas
                </label>
              </div>
              <br>  
                <button class="btn btn-primary">NEXT</button>
            </form>
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


