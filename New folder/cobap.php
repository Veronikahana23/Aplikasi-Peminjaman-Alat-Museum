<?php
include 'koneksi.php';
              $id = 1;
              $query = "SELECT * FROM `penanggungjawab` WHERE id = $id";
              $sql = mysqli_query($conn,$query);
              while ($data = mysqli_fetch_assoc($sql)) {
                print_r($data['nama']);
            }
?>