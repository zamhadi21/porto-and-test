<?php
$uang = 3000000;

for ($a=1;$a<=12; $a++ )
{

$uang = $uang +( $uang * 2.5/100);
echo "bulan ".$a." =  Rp.";
echo   $uang;

echo "<br>";

}



?>
