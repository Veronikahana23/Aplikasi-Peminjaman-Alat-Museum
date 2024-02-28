<?php
	include 'cek_session.php';
	include 'koneksi.php';
		$id = $_POST['pinjam'];
		$query = "DELETE FROM peminjaman2 WHERE `id`= $id";

		$sql = mysqli_query($conn, $query);
		if ($sql) {
			header("Location: home3.php?pesan=hapus_sukses");
		}
		else {
			echo "Data gagal dihapus!";
			die("\nError: " . mysqli_error($conn));
		}
?>