<?php 
	include 'koneksi.php';
	include 'cek_session.php';
	$id_pinjam = $_POST['id-pinjam'];
	$id_status = $_POST['status'];

	$data_peminjaman = mysqli_query($conn, "UPDATE peminjaman2 SET `id_status` = '1' WHERE `peminjaman2`.`id` = '$id_pinjam'") OR die(mysqli_error($conn));

header("location:home_admin.php");
?>