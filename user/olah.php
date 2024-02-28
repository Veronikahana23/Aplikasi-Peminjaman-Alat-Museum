<?php 
	include 'koneksi.php';
	include 'cek_session.php';
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

	$data_peminjaman = mysqli_query($conn, "INSERT INTO peminjaman2 (`id_penanggungjawab`, `nama_instansi`, `alamat_instansi`, `kota_instansi`, `telepon_instansi`, `nama_kegiatan`, `tanggal_kegiatan`, `jam_mulai_kegiatan`, `jam_selesai_kegiatan`, `id_ruang`, `id_status`) VALUES ('$penanggungjawab_id','$instansi_nama','$instansi_alamat', '$instansi_kota', '$instansi_telp', '$kegiatan_nama', '$kegiatan_tanggal', '$kegiatan_jam_mulai', '$kegiatan_jam_selesai', '$kegiatan_ruang', 1)") OR die(mysqli_error($conn));

header("location:home3.php");
?>