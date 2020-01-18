<!DOCTYPE html>
<html>

<head>
	<title>base</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">pokemon</h1>
		<h3 class="deskripsi">--------------------------------</h3>
	</header>

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=input">INPUT</a></li>
			<li><a href="index.php?page=tampil">Tampil data</a></li>
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'tampil_element':
				include "halaman/tampil_element.php";
				break;
			case 'element':
				include "halaman/element.php";
				break;
			case 'home':
				include "halaman/home.php";
				break;
			case 'input':
				include "halaman/input.php";
				break;
			case 'tampil':
				include "halaman/tampil.php";
				break;
								
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>