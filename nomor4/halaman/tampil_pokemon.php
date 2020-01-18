<div class="halaman">
<html>
<head>
	<title>Tampil data</title>
</head>
<body>
 
	<h2>TAMPIL DATA </h2>
	<br>
	
	<br>
	
	<table border="0" cellpadding="5" cellspacing="0" WIDTH="500" align="center" >
		<tr >
			<td><a href="index.php?page=tampil_element">tampil element</a> || <a href="index.php?page=pokemon">tambah pokemon</a></td>
			<th>Nis</th>
			<th>Nama</th>
			<th>jenis_kelamin</th>
			<th>kelas</th>
			<th>umur</th>
		
			<th>OPSI</th>
		</tr>
		<?php 
		include ('koneksi.php');
		$no = 1;
		$data = mysqli_query ($conn ,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIS']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
				<td><?php echo $d['umur']; ?></td>
				<td>
					<a href="halaman/edit.php?id=<?php echo $d['number_id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['number_id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>