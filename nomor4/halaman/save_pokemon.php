<?php

include('../koneksi.php');

if(isset($_POST["Simpan"])){
 $id = $_POST['id'];
 $nama = $_POST['nama_element'];
 
 
 
 if(!empty($id) || !empty($nama)){
  $sql = "INSERT INTO element_tb ( id_element ,name) 
    VALUES ( '$id','$nama')";
  mysqli_query($conn, $sql);
  header('location:../index.php');
 }else{
  echo 'Semua data diperlukan. Harap isi semua.!';
 }
}
?>