<!DOCTYPE html>
<html>
<head>
	<title>tika</title>
</head>
<body>
	<?php 
	$phi = 3.14; 
	$r = 159; 
	Function luas (){
			global $phi, $r;
			$luaslingkaran = $phi * $r * $r;
			echo "1. Luas Lingkaran = ";
			echo $luaslingkaran;
			echo "<br><br>";
		}
	function keliling(){
			global $phi, $r;
			$kelilinglingkaran = 2 * $phi * $r;
			echo "2. Keliling Lingkaran = ";
			echo $kelilinglingkaran;
			echo"<br><br>";
		}
	function volume(){
			global $phi, $r;
			$volumebola = 4 * $phi * $r * $r;
			echo "3. Volume Bola = ";
			echo $volumebola;
		}
	luas();
	keliling();
	volume();
	?>
</body>
</html>