<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM element_tb WHERE id_element='$id'")or die(mysql_error());
 
header("location:../index.php");
?>