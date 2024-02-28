<?php 
	include 'koneksi.php';
	include 'cek_session.php';
	$id_pinjam = $_POST['id-pinjam'];
	$id_status = $_POST['status'];
	echo "$id_status";
	$penanggungjawab_id = $_SESSION['id'];
	$penanggungjawab_nama = $_POST['penanggungjawab-nama'];
	$penanggungjawab_email = $_POST['penanggungjawab-email'];
	$penanggungjawab_nomorhp = $_POST['penanggungjawab-nomorhp'];
	$penanggungjawab_alamat = $_POST['penanggungjawab-alamat'];
	$penanggungjawab_id = $_POST['penanggungjawab-id'];

	$instansi_nama = $_POST['instansi-nama'];
	$instansi_alamat = $_POST['instansi-alamat'];
	$instansi_kota = $_POST['instansi-kota'];
	$instansi_telp = $_POST['instansi-telp'];

	$kegiatan_nama = $_POST['kegiatan-nama'];
	$kegiatan_tanggal = $_POST['kegiatan-tanggal'];
	$kegiatan_jam_mulai = $_POST['kegiatan-jam-mulai'];
	$kegiatan_jam_selesai = $_POST['kegiatan-jam-selesai'];
	$kegiatan_ruang = $_POST['kegiatan-ruang'];

	$data_penanggungjawab = mysqli_query($conn, "UPDATE penanggungjawab SET nama = '$penanggungjawab_nama', no_wa = '$penanggungjawab_nomorhp', email = '$penanggungjawab_email', alamat = '$penanggungjawab_alamat' WHERE `id` = '$penanggungjawab_id'") OR die(mysqli_error($conn));

	$data_peminjaman = mysqli_query($conn, "UPDATE peminjaman2 SET `id_penanggungjawab` = '$penanggungjawab_id', `nama_instansi` = '$instansi_nama', `alamat_instansi` = '$instansi_alamat', `kota_instansi` = '$instansi_kota', `telepon_instansi` = '$instansi_telp', `nama_kegiatan` = '$kegiatan_nama', `tanggal_kegiatan` = '$kegiatan_tanggal', `jam_mulai_kegiatan` = '$kegiatan_jam_mulai', `jam_selesai_kegiatan` = '$kegiatan_jam_selesai', `id_ruang` = '$kegiatan_ruang', `id_status` = '$id_status' WHERE `peminjaman2`.`id` = '$id_pinjam'") OR die(mysqli_error($conn));

header("location:home3.php");
?>