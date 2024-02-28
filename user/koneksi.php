<?php
	$conn = new mysqli('localhost','root','','peminjaman');
	if ($conn->connect_error){
		die("Error: " . mysqli_connect_error());
	}
?>