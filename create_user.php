<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$no_wa = $_POST['no_wa'];
	$username = $_POST['username'];
	$alamat = $_POST['alamat'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	// $query1 = mysqli_query($conn, "SELECT email FROM penanggungjawab");
	// $data = mysqli_fetch_assoc($query1);
	// $username


	if ($password1 == $password2) {
		$query = "INSERT INTO `penanggungjawab` (`nama`,`no_wa`,`email`, `alamat`,`password`, `role`) VALUES('$nama','$no_wa','$username','$alamat','$password1', '2')";
		$sql = mysqli_query($conn, $query);
		if ($sql) {
			header("Location: index.php?pesan=Signin_Sukses");
		}
		else {
			echo "Data gagal di tambahkan!";
			die("\nError: " . mysqli_error($conn));
		}
	}
	else {
			echo "Data gagal di tambahkan!";
			die("\nError: " . mysqli_error($conn));
		}

		header("Location: index.php");
		
?>