<?php
$host   = 'localhost';
$db_name  = 'pokemon';
$db_user  = 'root';
$db_pass  = '';

$conn = mysqli_connect($host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno($conn)){
 echo 'Koneksi Gagal';
}
?>