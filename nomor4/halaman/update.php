
<?php

include('../koneksi.php');

if(isset($_POST["Simpan"])){
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jk=$_POST['jk'];
 $kelas=$_POST['kelas'];
 $umur=$_POST['umur'];
 
 
 if(!empty($nim) || !empty($nama)){
  $sql = "UPDATE INTO siswa ( NIS,nama,jenis_kelamin,kelas,umur) 
    VALUES ( '$nim','$nama','$jk','$kelas','$umur')";
  mysqli_query($conn, $sql);
  header('location:../index.php');
 }else{
  echo 'Semua data diperlukan. Harap isi semua.!';
 }
}
?>