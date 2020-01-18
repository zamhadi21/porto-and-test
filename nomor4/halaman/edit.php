<div class="halaman">
<html>
<head>
	<title>CRUD</title>
</head>
<body>

	<h2></h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn ,"select * from siswa where number_id=$id");
	while($b = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nis</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $b['number_id']; ?>">
						<input type="text" name="nama" value="<?php echo $b['NIS']; ?>">
					</td>
				</tr>
				<tr>
					<td>nama</td>
					<td><input type="nama" name="nim" value="<?php echo $b['nama']; ?>"></td>
				</tr>
				<tr >
					<td height="40">Jenis Kelamin </td>
						<td>:
							<select name="jk" id="jk">
								<option value="Laki-Laki" selected>Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="alamat" value="<?php echo $b['kelas']; ?>"></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="text" name="alamat" value="<?php echo $b['umur']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>
</div>