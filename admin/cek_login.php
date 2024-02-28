<?php
	include 'koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
	$query2 = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
	$sql = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($sql);
	$data2 = mysqli_fetch_assoc($query2);
	$penanggungjawab_id = $data2['id'];
	$penanggungjawab_nama = $data2['nama'];
	if (mysqli_num_rows($sql) == 1){
        $_SESSION['nama'] = $penanggungjawab_nama;
        $_SESSION['id'] = $penanggungjawab_id;
		$_SESSION['username'] = $username;
		$_SESSION['status'] = 'login';
		if ($data['role'] == 1) {
			$path = 'admin';

		header("Location: home_admin.php");
		}
	}
	else {
		session_destroy();
		header("Location: login.php?pesan=gagal");
	}
?>