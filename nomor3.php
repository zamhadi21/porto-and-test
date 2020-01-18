<?php
cetak_gambar(9);
function cetak_gambar($a){
	if($a%2!=0){
		echo"Parameter harus bilangan genap";
	}else{
		for($baris=1;$baris<=$a;$baris++){
		for($kolom=1;$kolom<=$a;$kolom++){
			if($baris==1){
				echo" + ";
			}else if($baris==$a){
				echo" + ";
			}else if($kolom%3==0){
				echo" + ";
			}else{
				echo" = ";
			}
		}
		echo"<br>";
	}
	}
	
}
?>