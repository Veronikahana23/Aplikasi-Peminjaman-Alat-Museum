<?php
// PHP
// buat query
$username = $_POST['username'];
$password = $_POST['password'];
include 'koneksi.php';
$q = "SELECT * FROM penanggungjawab WHERE email='$username' AND password='$password'";
// eksekusi query
$e = mysqli_query($conn, $q);
// hitung hasil dan cek ada atau tidaknya data
$is_exist = mysqli_num_rows($e);
if($is_exist>0){
// keluarkan hasil
$r = mysqli_fetch_assoc($e);
$_SESSION['username'] = $r['nama']; // set session untuk nama
}else{
die('username atau password tidak ditemukan');
}
header("Location: home.php");
?>