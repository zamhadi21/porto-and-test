<div class="halaman">
<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h2>TAMPIL DATA ELEMENT POKEMON</h2>
	<br>
	
	<br>
	
	<table border="0" cellpadding="5" cellspacing="0" WIDTH="500" align="center" >
		<tr bgcolor="#87CEFA" align="center">
			<th>Id element</th>
			<th>nama element</th>
			
		
			<th>OPSI</th>
		</tr>
		<?php 
		include ('koneksi.php');
		$no = 1;
		$data = mysqli_query ($conn ,"select * from element_tb");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			
				<td><?php echo $d['id_element']; ?></td>
				<td><?php echo $d['name']; ?></td>
				
				<td>
					<a href="halaman/edit.php?id=<?php echo $d['id_element']; ?>">EDIT</a>
					<a href="delete_element.php?id=<?php echo $d['id_element']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>