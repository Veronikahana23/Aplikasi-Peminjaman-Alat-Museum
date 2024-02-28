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


  <title>Detail Data Peminjaman</title>
  <link rel="icon" type="../image/jpg" href="../img/logobssn.jpg">

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="../css/agency.min.css" rel="stylesheet">
  <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->

</head>

<section class="bg-dark page-section">
<body style="max-width: 100%">
  <header class="header">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home_admin.php"><img src="../img/logo.png" width="250"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
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
          <div class="container">
              <br>
              <br>
              <h1 class="text-center">Detail</h1><br><br>
              <?php
              $id = $_SESSION['id'];
              $id_pinjam = $_POST['id-pinjam'];
              $query = "SELECT *, `ruang`.`nama` AS `ruang`,`peminjaman2`.`id` AS `pinjam`, `penanggungjawab`.`nama` AS `nama`, `penanggungjawab`.`email` AS `email`, `penanggungjawab`.`no_wa` AS `no_wa`,`penanggungjawab`.`alamat` AS `alamat` FROM `peminjaman2` JOIN `penanggungjawab` ON `peminjaman2`.`id_penanggungjawab` = `penanggungjawab`.`id` JOIN `ruang` ON `peminjaman2`.`id_ruang` = `ruang`.`id` WHERE `peminjaman2`.`id` = $id_pinjam";
              $sql = mysqli_query($conn,$query);
              $data = mysqli_fetch_assoc($sql);
              ?>

              <table>
              	<tr>
              		<td colspan="3"><h2>Penanggungjawab</h2></td>
              	</tr>
              	<tr>
              		<td><h4>Nama </h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['nama']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Email </h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['email']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Nomor HP </h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['no_wa']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Alamat </h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['alamat']?></h4></td>
              	</tr>

              	<tr>
              		<td colspan="3"><h2>Instansi</h2></td>
              	</tr>
              	<tr>
              		<td><h4>Nama</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['nama_instansi']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Alamat</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['alamat_instansi']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Kota</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['kota_instansi']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Nomor Telepon</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['telepon_instansi']?></h4></td>
              	</tr>
              	
              	<tr>
              		<td colspan="3"><h2>Kegiatan</h2></td>
              	</tr>
              	<tr>
              		<td><h4>Nama</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['nama_kegiatan']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Tanggal</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['tanggal_kegiatan']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Jam Mulai</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['jam_mulai_kegiatan']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Jam Selesai</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['jam_selesai_kegiatan']?></h4></td>
              	</tr>
              	<tr>
              		<td><h4>Ruang Yang Dipilih</h4></td>
              		<td><h4>  :  </h4></td>
              		<td><h4> <?=$data['ruang']?></h4></td>
              	</tr>
              	
              </table>
              <br><br><br>
              <a class="btn btn-primary" href="home_admin.php">Kembali</a>
          </div>
           
        </div>
        <!-- End Content -->
      </div>
      <!-- End Container -->
  <!-- end content baru -->
</div>
  <!-- end body -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/agency.min.js"></script>

</body>

</html>